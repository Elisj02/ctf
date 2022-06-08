<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAnswer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $correct = UserAnswer::where("correct","=", "1")->where("user_id", "=", Auth::user()->id)
        ->select(DB::raw("category_id"))
        ->get();

        $puntos = UserAnswer::where("correct","=", "1")->where("user_id", "=", Auth::user()->id)
        ->sum('correct');

        $puntos *= 2;

        $time = DB::table('useranswers')->where("user_id", "=", Auth::user()->id)->sum('time');
        return view('dashboard')->with('correct', $correct)->with('time', $time)->with('puntos', $puntos);
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
        $partidas = json_decode($request->getContent());
        foreach ($partidas as $value) {
            $newUserAnswer = new UserAnswer();
            $newUserAnswer->user_id = $value->user_id;
            $newUserAnswer->question_id = $value->question_id;
            $newUserAnswer->answer = $value->answer;
            $newUserAnswer->category_id = $value->category_id;
            $newUserAnswer->correct = $value->correct;
            $newUserAnswer->time = $value->tiempo;
            $newUserAnswer->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
