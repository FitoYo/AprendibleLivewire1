<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticleForm extends Component
{

    public $title;

    public $content;

    protected $rules = ['title' => 'required', 'content' => 'required',];


// metodo para validacion en tiempo real - metodo incluido en livewire
    /*public function updated($propertyName)
    {
        $this->validate($propertyName);
        // $this->validateOnly($propertyName);
    }*/



    public function save()
    {
      /* $data = $this->validate([ livewire tiene $rules para validar --
            'title' => 'required',
            'content' => 'required',
        ]); // validate() devuelve un array con todos los datos ya validados-- entonses no necesitariamos volver a asignar los datos como aca a abajo

       /* $article = new Article;
        $article->title = $this->title;
        $article->content = $this->content;
        $article->save(); */

        $data = $this->validate();

        Article::create($data); // ahora creamos el registro con este metodo y tenemos que ver la asignacion masiva en el modelo


        session()->flash('status', __('para la traduccion'));

        $this->redirectRoute('articles.index');
    }

    public function render()
    {
        return view('livewire.article-form');
    }
}
