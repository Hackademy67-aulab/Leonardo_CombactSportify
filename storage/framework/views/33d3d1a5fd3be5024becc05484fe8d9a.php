<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     
     <link rel="icon" type="image/x-icon" href="/image/boxing.png">

     
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap" rel="stylesheet">

     

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

     

     <link rel="stylesheet" href="/css/style.css">


    <title>Activities page</title>
   
  </head>


  <div class="container-fluid">
    <div class="row">
        <div class="col-">

            <h1 class="d-flex justify-content-center">Le nostre attività</h1>

        </div>
    </div>
  </div>




  

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
     

        <a href="<?php echo e(route('Homepage')); ?>" class="headerContent">Home</a>

        <a href="<?php echo e(route('productsPage')); ?>" class="headerContent">Prodotti</a>

       
        
      </div>
    </div>
  </div>



  
 
  
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-12 d-flex justify-content-between">


      <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="card custom " style="width: 18rem;">
          <img src="<?php echo e($activity['img']); ?>" alt="<?php echo e($activity['img']); ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo e($activity['name']); ?></h5>
            <p class="card-text"><?php echo e($activity['description']); ?></p>
           
            <a href="<?php echo e(route('activitiesDetail', ['id'=>$activity['id']])); ?>" class="btn btn-primary">Visualizza</a>
          </div>
        </div>
        
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 


    </div>
  </div>
 </div>
  
  


     
    <script href="/js/script.js"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


  </body>
</html><?php /**PATH C:\Users\utente\wa\laravel.first\resources\views/activitiesPage.blade.php ENDPATH**/ ?>