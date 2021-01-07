

<?php $__env->startSection('content'); ?>
<form class="form-tag" action="<?php echo e(route('login')); ?>" method="POST">
      <?php echo csrf_field(); ?>

      
      <div class="content ">
        <div class="head m-b-md">
            <h2>Login</h2>
        </div>

  <div class="form-group justify-content-center">
    
    <input type="text" class="form-control" placeholder="Enter Username" id="name" name="name">

    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div style="font-size:13px;color:red;">
      <?php echo e($message); ?>

    </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>

  <div class="form-group">
    
    <input type="text" class="form-control" placeholder="Enter password" id="password" name="password">

    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div style="font-size:13px;color:red;">
      <?php echo e($message); ?>

    </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projects\laravel\resources\views/pages/login.blade.php ENDPATH**/ ?>