<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserAnswer;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ranking = DB::table('users')
        ->select('users.*', 'useranswers.*')
        ->join(DB::raw('(SELECT user_id, SUM(correct) as puntos from `useranswers`  where correct = 1 GROUP BY user_id) useranswers'),
        function($join)
        {
           $join->on('users.id', '=', 'useranswers.user_id');
        })
        ->orderBy('puntos', 'DESC')
        ->get();
        return view('ranking', compact('ranking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $myuser = User::findOrFail($id);
        return view('user.show', compact('myuser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myuser = User::findOrFail($id);
        return view('user.edit', compact('myuser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $validate = $request->validate([
            'name' => 'required',
            'surnames' => 'required',
            'email' => 'required',
            'username' => 'required',
        ]);

        try {
            $newUser = User::findOrFail($id);
            $newUser->name = $request->input('name');
            $newUser->surnames = $request->input('surnames');
            $newUser->email = $request->input('email');
            $newUser->username = $request->input('username');
            if (is_uploaded_file($request->icon)){
                $nombreFoto = time() . "_" . $request->file('icon')->getClientOriginalName();
                $newUser->icon = $nombreFoto;
                $request->file('icon')->storeAs('public/images', $nombreFoto);
            }
            $newUser->save();

            return redirect()->route('user.show', $newUser->id);
        } catch (QueryException $exception) {
            return redirect()->route('user.show', $newUser->id)->with('error', 1);

        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('useranswers')->where('user_id', '=', $id)->delete();
        DB::table('users')->where('id', '=', $id)->delete();
        return redirect()->route('login');
    }
}
