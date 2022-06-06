<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class QuestionsComponent extends Component
{
    use WithPagination;

    public $pregunta = "";

    public $category = "";

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->category != "") {
            $myquestions = Question::where('question', 'like', '%' . $this->pregunta . '%')->where('category_id', '=', $this->category)->paginate(10);
        }   else {
                $myquestions = Question::where('question', 'like', '%' . $this->pregunta . '%')->paginate(10);
            }
        $categories = Category::all();
        $url='storage/images/';
        return view('livewire.questions-component', ['myquestions'=>$myquestions])->with('url', $url)->with('categories', $categories);
    }
}
