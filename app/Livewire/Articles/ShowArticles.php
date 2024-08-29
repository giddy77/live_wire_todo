<?php

namespace App\Livewire\Articles;

use App\Models\Articles;
use Livewire\Component;
use Livewire\WithPagination;

class ShowArticles extends Component
{
    use WithPagination;
    public $name;



    public function createArticle()
    {
        // dd($this->name);
        $this->validate(['name'=>'required|min:2']);
        Articles::create(['name'=>$this->name]);
        $this->reset(['name']);

        request()->session()->flush('success', 'Article created');
    }
    public function render()
    {
        $articles = Articles::paginate(2);
        return view('livewire.articles.show-articles', ['articles' => $articles]);
    }
}
