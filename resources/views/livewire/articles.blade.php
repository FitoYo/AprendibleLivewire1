<div>
    <h1>Articles class LW {{$h1}}</h1>

    <h1 class="text-danger">{{$category}}</h1>
<label>You Write something --> 
    <input wire:model="category" type="text" placeholder="Category...">
</label>

    <!-- modificadore
    // wire:model.debounce.5s="category" 
    // wire:model.lazy="category" 
    // wire:model.defer="category" -->
<br>
<hr>
<label>Search Text
   <input wire:model="search" type="serch" placeholder="Buscar..">
</label>


<br>
<hr>
<label>Select for could see the result list --> 
<input wire:model="show" type="checkbox">
</label>
<br>
<hr>
    <h2>Tags Etiquetas: @json($tags)</h2>

<label>
    Tag 1
    <input wire:model="tags" type="checkbox" value="tag1">
</label>
<label>
    Tag 2
    <input wire:model="tags" type="checkbox" value="tag2">
</label>
<label>
    Tag 3
    <input wire:model="tags" type="checkbox" value="tag3">
</label>
<br>
<hr>
<br>
<select wire:model="tagSelect">
    <option value="">Select one</option>
    <option value="tag1">Tag1</option>
    <option value="tag2">Tag2</option>
    <option value="tag3">Tag3</option>
</select>
<h2>{{$tagSelect}}</h2>
<hr>

<a href="{{route('articles.create')}}">Crear Nuevo Article</a>

@if($show)
    <ul>
        @foreach( $articles as $article )
            <li>{{ $article->title }}</li>
        @endforeach
    </ul>
<hr>
@endif

</div>
