<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('All Posts')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

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

                    
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="w-full m-auto">        
                            <div class="w-1/5 m-3 p-2 border-2 border-indigo-600 rounded-lg  inline-block" >
                               <img src="<?php echo e(url('/images/Flower2.jpg')); ?>" class="w-1/1 h-1/1">
                            </div>
                        <div class="w-2/5 m-3 p-2 border-2 border-indigo-600 rounded-lg  inline-block ">
                        <span class="text-green-500">Post ID </span><?php echo e($post->id); ?>

                        <br>
                        <span class="text-green-500">User ID </span><?php echo e($post->user_id); ?>

                        
                        <br>
                        <span class="text-green-500">User Name </span><?php echo e($post->user->name); ?>

                        <br>
                        <span class="text-green-500">Title of the Post </span>
                        <br>
                        <span class="text-red-500 border-2 rounded-lg">
                        <?php echo e($post->title); ?>

                        </span>
                        <br>
                        <span class="text-green-500">Body of the Post</span>
                        <br>
                        <span class="text-red-500 border-2 rounded-lg">
                        <?php echo e($post->body); ?>

                        </span>
                        <br>                    
                        <ul class="list-none ">
                        

                        <span class="text-green-500">Comments</span>

                        <span class="text-red-500 border-2 rounded-lg">
                        <ul class="list-inside">
                        <?php $__currentLoopData = $post->comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($comment->ucomment); ?> </li>
                        
                        <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
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



                  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

                  <button  class="deleteRecord py-2 px-4 bg-red-900 text-white font-semibold
                  rounded-lg shadow-md hover:bg-green-900 focus:outline-none focus:ring-2
                  focus:ring-green-400 focus:ring-opacity-75" onclick="delRecord(<?php echo e($post->id); ?>)" >
                    Delete Post <?php echo e($post->id); ?>

                    
                  </button>
        </div>


    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="w-3/5 m-auto">
        <?php echo e($posts->links()); ?>

    </div>
                    

                </div>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH E:\LaraBlogAug_11\bpblog\resources\views/post.blade.php ENDPATH**/ ?>