<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Post') }}
        </h2>
    </x-slot>

    <div class="justify-center items-center px-4">
        <form action="{{ route("posts.store") }}" method="POST">
            @csrf
              @method('POST')
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Post Title
                </label>
                <textarea class="shadow form-textarea mt-1 block w-full border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="5" name="title" placeholder="Title of the Post"></textarea>
            </div>

            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
            Post Body
            <textarea class="shadow form-textarea mt-1 block w-full border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="5" name="body" placeholder="Body of the Post"></textarea>
        </label>
            </div>
            <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Submit
                </button>
            </div>
        </form>
    </div>


</x-app-layout>
