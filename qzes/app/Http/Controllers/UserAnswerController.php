<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAnswer;

class UserAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $correct = UserAnswer::where("correcto","=",1)
        ->select(DB::raw("category_id"))
        ->get();
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
        $partidas = json_decode($request->partidas, true);

        try {
            foreach ($partidas as $value) {
                $newUserAnswer = new UserAnswer();
                $newUserAnswer->user_id = $value->user_id;
                $newUserAnswer->question_id = $value->question_id;
                $newUserAnswer->answer = $value->answer;
                $newUserAnswer->category_id = $value->category_id;
                $newUserAnswer->correct = $value->correct;

                $newUserAnswer->save();
            }
        return redirect()->route('dashboard');
        } catch (QueryException $exception) {
            return redirect()->route('dashboard')->with('error', 1);
        };
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
