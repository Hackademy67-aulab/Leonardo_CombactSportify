

<x-layout>


  <x-slot name="title">Products detail</x-slot> 

  <div class="container-fluid">
    <div class="row">

      <h1 class="d-flex mt-5 justify-content-center mainpage-title">Dettagli {{$product['name']}}</h1>


      <div class="mb-5 col-md-12  d-flex justify-content-center">
  
  
       
          <div class="cardCustom" style="width: 18rem;">
            <img src="{{$product['img']}}" class="card-img-top" alt="{{$product['img']}}">
            <div class="card-body">
              <h5 class="card-title">{{$product['name']}}</h5>
              <p class="card-text">{{$product['description']}}</p>
              <p class="card-text">{{$product['price']}}</p>
              <a href="{{route('productsPage')}}" class="btn btn-primary">Torna indietro</a>
            </div>
          </div>
        
  
      </div>
    </div>
   </div>


</x-layout>
    




  
 
  
  
  

