<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('post') }}
        </h2>
    </x-slot>

    <div class="container bg-danger my-4">
        <div class="container d-flex justify-center align-iten-center">
            <h1>Post Here</h1>
        </div>
        <form action="" method="POST">
            @csrf
            <div class="form-group ">
                <label for="title">Title</label>
                <input type="text" class="form-control  " id="title" name="title">
            </div>

            <div class="form-group">
                <label for="body"> Textarea</label>
                <textarea class="form-control" id="body" name="body"></textarea>
            </div>

            <div class="container my-4 d-flex justify-center align-iten-center ">
            <button type="submit" class="btn btn-primary" value="post">post</button>
            </div>
        </form>
    </div>

    @if (session()->has('status')) {{session('status')}} @endif

</x-app-layout>