<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('question.index');
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
        $myquestion = Question::findOrFail($id);
        $myanswers = DB::table('answers')->where(['question_id' => $id])->get();
        $category = DB::table('categories')->where(['id' => $myquestion->category_id])->get();

        return view('question.show')->with('myquestion', $myquestion)->with('myanswers', $myanswers)->with('category', $category);
    }

        public function search($q)
    {
        $myquestion = DB::table('questions')->where('question', 'like', "%$q%")->get();
        $myanswers = DB::table('answers')->where(['question_id' => $id])->get();
        $category = DB::table('categories')->where(['id' => $myquestion->category_id])->get();

        return view('question.show')->with('myquestion', $myquestion)->with('myanswers', $myanswers)->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myquestion = Question::findOrFail($id);
        $myanswers = DB::table('answers')->where(['question_id' => $id])->get();
        $mycategory = DB::table('categories')->where(['id' => $myquestion->category_id])->get();
        $categories = DB::table('categories')->get();

        return view('question.edit')->with('myquestion', $myquestion)->with('myanswers', $myanswers)->with('mycategory', $mycategory)->with('categories', $categories);
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
        try {
            $newQuestion = User::findOrFail($id);
            $newQuestion->name = $request->input('name');
            $newQuestion->surnames = $request->input('surnames');
            $newQuestion->email = $request->input('email');
            $newQuestion->username = $request->input('username');
            $newQuestion->icon = $request->input('icon');

            $newQuestion->save();

            return redirect()->route('question.show', $newUser->id);
        } catch (QueryException $exception) {
            return redirect()->route('question.show', $newUser->id)->with('error', 1);

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
        $newQuestion = Question::findOrFail($id);
        // DELETE respuestas, preguntas FROM respuestas JOIN preguntas ON respuestas.idPregunta = preguntas.id WHERE respuestas.idPregunta = '29';
        DB::table('answers')->where('question_id', '=', $id)->delete();
        DB::table('questions')->where('id', '=', $id)->delete();
        return redirect()->route('question.index');
    }
}
