<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;
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
        $categories = DB::table('categories')->get();
        return view('question.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $validate = $request->validate([
            'question' => 'required',
            'r1' => 'required',
            'r2' => 'required',
            'r3' => 'required',
            'r4' => 'required',
            'answer' => 'required',
            'image' => 'required',
        ]);

        try {
            $newQuestion = new Question();
            $newQuestion->question = $request->input('question');
            $newQuestion->answer = $request->input('answer');
            $newQuestion->category_id = $request->input('category');
            $nombreFoto = time() . "_" . $request->file('image')->getClientOriginalName();
            $newQuestion->image = $nombreFoto;
            $newQuestion->save();

            $question_id = DB::table('questions')->max('id');
            $newAnswer = new Answer();
            $newAnswer->option = $request->input('r1');
            $newAnswer->question_id = $question_id;
            $newAnswer->save();

            $newAnswer2 = new Answer();
            $newAnswer2->option = $request->input('r2');
            $newAnswer2->question_id = $question_id;
            $newAnswer2->save();

            $newAnswer3 = new Answer();
            $newAnswer3->option = $request->input('r3');
            $newAnswer3->question_id = $question_id;
            $newAnswer3->save();

            $newAnswer4 = new Answer();
            $newAnswer4->option = $request->input('r4');
            $newAnswer4->question_id = $question_id;
            $newAnswer4->save();

            $request->file('image')->storeAs('public/images', $nombreFoto);
            return redirect()->route('question.index');
        } catch (QueryException $exception) {
            return redirect()->route('question.index')->with('error', 1);

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
        $myquestion = Question::findOrFail($id);
        $myanswers = DB::table('answers')->where(['question_id' => $id])->get();
        $category = DB::table('categories')->where(['id' => $myquestion->category_id])->get();
        $url='storage/images/';

        return view('question.show')->with('myquestion', $myquestion)->with('myanswers', $myanswers)->with('category', $category)->with('url', $url);
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
        $url='storage/images/';

        return view('question.edit')->with('myquestion', $myquestion)->with('myanswers', $myanswers)->with('mycategory', $mycategory)->with('categories', $categories)->with('url', $url);
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
            'question' => 'required',
            'r1' => 'required',
            'r2' => 'required',
            'r3' => 'required',
            'r4' => 'required',
            'answer' => 'required',
        ]);

        try {
            $newQuestion = Question::findOrFail($id);
            $newQuestion->question = $request->input('question');
            $newQuestion->answer = $request->input('answer');
            $newQuestion->category_id = $request->input('category');

            if (is_uploaded_file($request->image)){
                $nombreFoto = time() . "_" . $request->file('image')->getClientOriginalName();
                $newQuestion->image = $nombreFoto;
                $request->file('image')->storeAs('public/images', $nombreFoto);
            }
            $newQuestion->save();

            $newAnswer = Answer::findOrFail($request->input('pr1'));
            $newAnswer->option = $request->input('r1');
            $newAnswer->save();

            $newAnswer2 = Answer::findOrFail($request->input('pr2'));
            $newAnswer2->option = $request->input('r2');
            $newAnswer2->save();

            $newAnswer3 = Answer::findOrFail($request->input('pr3'));
            $newAnswer3->option = $request->input('r3');
            $newAnswer3->save();

            $newAnswer4 = Answer::findOrFail($request->input('pr4'));
            $newAnswer4->option = $request->input('r4');
            $newAnswer4->save();;

            return redirect()->route('question.index');
        } catch (QueryException $exception) {
            return redirect()->route('question.index')->with('error', 1);

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
