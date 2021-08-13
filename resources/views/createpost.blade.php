<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">

        {{-- <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script> --}}

        <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

        <meta name="csrf-token" content="xxx">
    </head>




<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Post') }}
        </h2>
    </x-slot>

    <div class="justify-center items-center px-4">
        {{--  --}}
        <form id="postForm" action="{{ route("posts.store") }}" method="POST" >
            @csrf
            @method('POST')
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Post Title
                </label>
                <textarea class="shadow form-textarea mt-1 block w-full border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="5" name="title" placeholder="Title of the Post"></textarea>
                @error('title')
                          <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
            Post Body
            <textarea class="shadow form-textarea mt-1 block w-full border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="5" name="body" placeholder="Body of the Post"></textarea>
            @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
             @enderror
        </label>
            </div>
            <div class="flex items-center justify-between">
            <button class=" remove-user bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="submit" type="submit">
                Submit
                </button>
            </div>
        </form>
    </div>




</html>



</x-app-layout>
