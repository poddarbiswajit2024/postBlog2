<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

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
                        <button class="py-2 px-4 bg-red-500 text-white font-semibold
                        rounded-lg shadow-md hover:bg-green-700 focus:outline-none
                        focus:ring-2 focus:ring-green-400 focus:ring-opacity-75"
                        data-target="#createPostModal" data-toggle="modal">
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

                 <button class="py-2 px-4 bg-red-500 text-white font-semibold
                 rounded-lg shadow-md hover:bg-green-700 focus:outline-none
                 focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" id="editPost"
                 data-id="{{ $post->id }}" data-title="{{ $post->title }}"
                 data-body="{{ $post->body }}" data-target="#editPostModal" data-toggle="modal">
                    Edit Post
                  </button>



                  <meta name="csrf-token" content="{{ csrf_token() }}">



                  <button  class="deleteRecord py-2 px-4 bg-red-900 text-white font-semibold
                  rounded-lg shadow-md hover:bg-green-900 focus:outline-none focus:ring-2
                  focus:ring-green-400 focus:ring-opacity-75" data-target="#deleteModal"
                   data-toggle="modal" data-id="{{ $post->id }}" >
                    Delete Post
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

    {{-- modal create window --}}
      {{-- modal window --}}
      <div class="modal fade" id="createPostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-danger text-light">
              <h5 class="modal-title" id="createPostModalLabel">Create New Post</h5>
              <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="postForm" action="{{route("posts.store")}}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Title</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" id="title" name="title" rows="3"></textarea>
                        {{-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> --}}
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Body Text</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" id="body" name="body" rows="3"></textarea>
                        {{-- <input type="password" class="form-control" id="inputPassword3" placeholder="Password"> --}}
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Save Post</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                      </div>
                    </div>
                  </form>
            </div>
            <div class="modal-footer">

            </div>
          </div>
        </div>
      </div>
      {{-- end of modal create window --}}

      {{-- modal Edit window --}}

      <div class="modal fade" id="editPostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <script>


                $('#editPostModal').on('shown.bs.modal', function (event) {
                    var button=$(event.relatedTarget);
                    var title=button.data('title');
                    var body=button.data('body');
                    var post_id=button.data('id');
                    var modal=$(this);
                    modal.find('.modal-body #title').val(title);
                    modal.find('.modal-body #body').val(body);
                    modal.find('.modal-body #post_id').val(post_id);


                });
         </script>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-danger text-light">
              <h5 class="modal-title" id="editModalLabel">Edit  Post</h5>
              <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="formedit" action="{{route('posts.update','1')}}" method="post">


                    @csrf
                    @method('PUT')

                    <div class="form-group row" id="postData">
                        <input type="hidden" id="post_id" name="post_id" value="">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Title</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" id="title" name="title" rows="3"></textarea>
                        {{-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> --}}
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Body Text</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" id="body" name="body" rows="3"></textarea>
                        {{-- <input type="password" class="form-control" id="inputPassword3" placeholder="Password"> --}}
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" id="submit" class="btn btn-primary">Update Post</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                      </div>
                    </div>
                  </form>
            </div>
            <div class="modal-footer">

            </div>
          </div>
        </div>
      </div>
      {{-- end of modal Edit window --}}

      {{-- code for delete modal --}}
      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <script>


            $('#deleteModal').on('shown.bs.modal', function (event) {
                var button=$(event.relatedTarget);
                var post_id=button.data('id');
                var modal=$(this);
                modal.find('.modal-body #post_id_Del').val(post_id);


            });
     </script>

        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-danger text-light">
              <h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
              <input type="hidden" id="post_id_Del" name="post_id_Del" value="">
              <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h4>Are You Sure?</h4>
            </div>
            <div class="modal-footer">
                <form id="formdelete" action="{{route('posts.destroy','1')}}" method="post">
                        @csrf
                        @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete?</button>
                </form>

            </div>
          </div>
        </div>
      </div>

      {{-- end of delete modal --}}


      {{-- script for edit --}}

</x-app-layout>
