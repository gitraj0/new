<x-app-layout>
    <x-slot name="header">
        <h2 class="  font-semibold text-xl text-white-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-secondary">
        @if (session()->has('status'))
        {{session('status')}}
            
        @endif
        <div class=" bg-secondary max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-danger overflow-hidden shadow-sm sm:rounded-lg  ">
                <div class="p-6 bg-danger border-b border-gray-200 ">
                    <h1>All Post</h1>
                    
                    <div class="table-responsive ">
                        <table class="table table-striped table-sm">
                          <thead class="bg-dark text-danger border-b border-primary-100">
                            <tr>
                              <th scope="col">name</th>
                              <th scope="col">title</th>
                              <th scope="col">body</th>
                              <th scope="col">action</th>
                            </tr>
                          </thead>
                          <tbody class="bg-secondary text-white border-b border-dark-100">
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->body}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{url('/post/edit',$post->id)}}" role="button">Edit</a>
                                    <a class="btn btn-danger" href="{{url('/post/delete',$post->id)}}" role="button">Delete</a>
                                </td>
                                <br>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>