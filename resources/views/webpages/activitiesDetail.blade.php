<x-layout>


  <x-slot name="title">Activities detail</x-slot> 

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
          <img src="{{$activity['img']}}" class="card-img-top" alt="{{$activity['img']}}">
          <div class="card-body">
            <h5 class="card-title">{{$activity['name']}}</h5>
            <p class="card-text">{{$activity['description']}}</p>
            
            <a href="{{route('activitiesPage')}}" class="btn btn-primary">Torna indietro</a>
          </div>
        </div>
     


    </div>
  </div>
 </div>
  
  
</x-layout>
