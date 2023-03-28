<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>


   <?php $__env->slot('title', null, []); ?> Activities detail <?php $__env->endSlot(); ?> 

  <div class="container-fluid">
    <div class="row">

      <h1 class="d-flex mt-5 justify-content-center mainpage-title">Le nostre attività</h1>


        <div class="col-12 col-md-6">
  
        </div>
    </div>
  </div>


 <div class="container-fluid">
  <div class="row">
    <div class="col-md-12 mb-5 d-flex justify-content-center">


    
        <div class="cardCustom" style="width: 18rem;">
          <img src="<?php echo e($activity['img']); ?>" class="card-img-top" alt="<?php echo e($activity['img']); ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo e($activity['name']); ?></h5>
            <p class="card-text"><?php echo e($activity['description']); ?></p>
            
            <a href="<?php echo e(route('activitiesPage')); ?>" class="btn btn-primary">Torna indietro</a>
          </div>
        </div>
     


    </div>
  </div>
 </div>
  
  
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\utente\wa\laravel.first\resources\views/webpages/activitiesDetail.blade.php ENDPATH**/ ?>