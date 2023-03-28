



<x-layout>



  <x-slot name="title">Products page</x-slot> 

  <div class="container-fluid">
    <div class="row justify-content-center">

      <h1 class="d-flex mt-5 mb-5 justify-content-center mainpage-title">La nostra selezione</h1>


     

      <div class="col-md-12">
       
      </div>
    </div>
  </div>




     

        



  

 <div class="container-fluid">
  <div class="row">
    <div class="col-md-12 d-flex justify-content-between">


      @foreach ($products as $product)

        <div class="card custom" style="width: 18rem;">
          <img src="{{$product['img']}}" class="card-img-top" alt="{{$product['img']}}">
          <div class="card-body">
            <h5 class="card-title">{{$product['name']}}</h5>
            <p class="card-text">{{$product['description']}}</p>
            <p class="card-text">{{$product['price']}}</p>
            <a href="{{route('productsDetail', ['id'=>$product['id']])}}" class="btn btn-primary">Visualizza</a>
          </div>
        </div>

      @endforeach 


    </div>
  </div>
 </div>
  
  
</x-layout>


    