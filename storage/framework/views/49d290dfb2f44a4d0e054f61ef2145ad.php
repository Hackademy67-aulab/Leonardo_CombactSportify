


<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>


   <?php $__env->slot('title', null, []); ?> Homepage <?php $__env->endSlot(); ?> 

    <div class="container-fluid vh-100 bg-img">

     <div class="row ">

        <div class="col-md-12 vh-100 ">


            <h1 class="mt-5 mainpage-title">Benvenuto in CombactSportify!</h1>
    
            <p class="mt-2 mainpage-title">Preparati a vincere con i migliori prodotti per sport da combattimento!</p>


        </div>
     </div>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>


 


  

         
  
        
    
    
<?php /**PATH C:\Users\utente\wa\laravel.first\resources\views/webpages/Homepage.blade.php ENDPATH**/ ?>