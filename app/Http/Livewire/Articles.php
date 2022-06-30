<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;

class Articles extends Component
{

    public $h1 = 'Titulo Articles';

    public $category = 'aprender a ser';

    public $tags = [];  // array

    public $tagSelect = ''; // string

    public $show = false;

    public $search = '';

 //   public $articles; no lo necesito 

   /*  public function mount()
    {
        $this->articles = Article::all();
    } */

    public function render()
    {
       //return view('livewire.articles', ['articles' => Article::all()]); // ->layout('welcome');

        //return view('livewire.articles');

       return view('livewire.articles', ['articles' => Article::where('title', 'like', "%{$this->search}%")->latest()->get()]);
    }
}
