<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('New Post')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="justify-center items-center px-4">
        <form action="<?php echo e(route("posts.store")); ?>" method="POST">
            <?php echo csrf_field(); ?>
              <?php echo method_field('POST'); ?>
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


 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH E:\LaraBlogAug_11\bpblog\resources\views/createpost.blade.php ENDPATH**/ ?>