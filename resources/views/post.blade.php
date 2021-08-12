<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-100 border-b border-gray-200">                   
                    <div >
                        <button class="py-2 px-4 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75"
                        id="showModal">
                            Create New Post
                        </button>                
                    </div>

                    
                    @foreach($posts as $post)
                        <div class="w-full m-auto">        
                            <div class="w-1/5 m-3 p-2 border-2 border-indigo-600 rounded-lg  inline-block" >
                               <img src="{{url('/images/Flower2.jpg')}}" class="w-1/1 h-1/1">
                            </div>
                        <div class="w-2/5 m-3 p-2 border-2 border-indigo-600 rounded-lg  inline-block ">
                        <span class="text-green-500">Post ID </span>{{$post->id}}
                        <br>
                        <span class="text-green-500">User ID </span>{{$post->user_id}}
                        
                        <br>
                        <span class="text-green-500">User Name </span>{{$post->user->name}}
                        <br>
                        <span class="text-green-500">Title of the Post </span>
                        <br>
                        <span class="text-red-500 border-2 rounded-lg">
                        {{$post->title}}
                        </span>
                        <br>
                        <span class="text-green-500">Body of the Post</span>
                        <br>
                        <span class="text-red-500 border-2 rounded-lg">
                        {{$post->body}}
                        </span>
                        <br>                    
                        <ul class="list-none ">
                        {{-- @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach --}}

                        <span class="text-green-500">Comments</span>

                        <span class="text-red-500 border-2 rounded-lg">
                        <ul class="list-inside">
                        @foreach($post->comment as $comment)
                        <li>{{ $comment->ucomment }} </li>
                        {{-- -> {{ $comment->post_id }}  --}}
                        <br>
                        @endforeach 
                        </ul>
                        </span>



                    <li class="inline-block">Java</li>
                    <li class="inline-block">C++</li>
                    <li class="inline-block">SQL</li>
                    <li class="inline-block">PHP</li>
                    <li class="inline-block">ASP.Net</li>
                </ul>

                 <button class="py-2 px-4 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                    Edit Post
                  </button>



                  <meta name="csrf-token" content="{{ csrf_token() }}">

                  <button  class="deleteRecord py-2 px-4 bg-red-900 text-white font-semibold
                  rounded-lg shadow-md hover:bg-green-900 focus:outline-none focus:ring-2
                  focus:ring-green-400 focus:ring-opacity-75" onclick="delRecord({{ $post->id }})" >
                    Delete Post {{ $post->id }}
                    {{-- py-2 px-4 bg-red-900 text-white font-semibold
                  rounded-lg shadow-md hover:bg-green-900 focus:outline-none focus:ring-2
                  focus:ring-green-400 focus:ring-opacity-75" data-id="{{ $post->id }}" --}}
                  </button>
        </div>


    </div>
    @endforeach
    <div class="w-3/5 m-auto">
        {{ $posts->links() }}
    </div>
                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>