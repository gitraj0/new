<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit post') }}
        </h2>
    </x-slot>
    <div class="container bg-danger my-4">
        <div class="container d-flex justify-center align-iten-center">
            <h1>Update Here</h1>
        </div>
        <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title"  name="title" value="{{$post->title}}">
            </div>
    
            <div class="form-group">
                <label for="body"> Textarea</label>
                <textarea class="form-control" id="body" name="body">{{$post->body}}</textarea>
            </div>
    
            <div class="container my-4 d-flex justify-center align-iten-center ">
                <button type="submit" class="btn btn-primary" value="post">Update</button>
            </div>
    
        </form>
    </div>


    @if (session()->has('status'))
    {{session('status')}}
        
    @endif

</x-app-layout>