<x-layout>


  <x-slot name="title">Activities page</x-slot> 

  <div class="container-fluid">
    <div class="row">
        <div class="col-">

            <h1 class="d-flex mt-5 justify-content-center mainpage-title">Le nostre attività</h1>

        </div>
    </div>
  </div>




  

  
 
  
 <div class="container-fluid">
  <div class="row">
    <div class="mb-5 col-md-12 d-flex justify-content-between">


      @foreach ($activities as $activity)

        <div class="card custom " style="width: 18rem;">
          <img src="{{$activity['img']}}" alt="{{$activity['img']}}">
          <div class="card-body">
            <h5 class="card-title">{{$activity['name']}}</h5>
            <p class="card-text">{{$activity['description']}}</p>
           
            <a href="{{route('activitiesDetail', ['id'=>$activity['id']])}}" class="btn btn-primary">Visualizza</a>
          </div>
        </div>
        
      @endforeach 


    </div>
  </div>
 </div>


</x-layout>
  
  
