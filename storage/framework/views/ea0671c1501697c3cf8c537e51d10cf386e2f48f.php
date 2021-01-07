

<?php $__env->startSection('content'); ?>
<form style="margin: 20px 20px 20px 20px; width: 340px;
    margin: 50px auto;
  	font-size: 15px;">
  <div class="form-group justify-content-center">
    
   
   <h1>Successfully Registered!!!!</h1>
   <a href="<?php echo e(route('login')); ?>">click here to login</a>
  </div>


</form> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projects\laravel\resources\views/pages/register_success.blade.php ENDPATH**/ ?>