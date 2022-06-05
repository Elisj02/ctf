<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class QuestionsComponent extends Component
{
    public $pregunta = "";

    public function render()
    {
        $myquestions = Question::where('question', 'like', '%' . $this->pregunta . '%')->get();
        $url='storage/images/';
        return view('livewire.questions-component', ['myquestions'=>$myquestions])->with('url', $url);
    }
}
