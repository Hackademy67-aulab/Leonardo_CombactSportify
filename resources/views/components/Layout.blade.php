<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     {{-- favicon --}}
     <link rel="icon" type="image/x-icon" href="/image/boxing.png">

     {{-- google fonts --}}
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap" rel="stylesheet">

     {{-- link fontawesome --}}

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     {{-- Collegamento bootstrap interno (vite) --}}

     @vite(['resources/css/app.css','resources/js/app.js']); 
    
    
    <title>{{$title ?? 'CombactSportify'}}</title>
    
</head>

<body>


  <x-navbar/>

   




 {{$slot}} 









  <x-footer/>
   
    
    
</body>
</html>