<div>
    <h1>Create New Form</h1>

    <form wire:submit.prevent="save">  {{-- .prevent evita que se recargue la paguina y envie el formulario que es la accion por defecto en HTML--}}
        <label>Title
           <input wire:model="title" type="text" placeholder="Title">
           @error('title')<div>{{$message}}</div>@enderror
        </label>
        <br>
        <label>Title
           <textarea wire:model="content" placeholder="Comment"></textarea>
           @error('content')<div>{{$message}}</div>@enderror
        </label>
        <br><br>

        <input type="submit" value="Save">

    </form>
</div>
