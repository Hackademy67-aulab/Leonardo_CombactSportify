<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
   public function index () {


        $products= [
    
            ['id'=>'1','name'=>'Guantoni','description'=>'Ottimi per ogni sport da combattimento di tipo striking','price'=>'€40','img'=>'/image/gloves.jpeg',],
            ['id'=>'2','name'=>'Fasce da boxe','description'=>'Necessarie per prevenire le fratture della mano','price'=>'€10','img'=>'/image/boxing-hand-wrap-red.jpg',],
            ['id'=>'3','name'=>'Paratibie','description'=>'Ottime per muay thai e kick-boxing','price'=>'€50','img'=>'/image/paratibie.jpg',],
            ['id'=>'4','name'=>'Paradenti','description'=>'Proteggono i denti dai colpi','price'=>'€5','img'=>'/image/mouthguards.jpg',],
        ];
    
    
    
        
        
        return view('webpages.productsPage', compact('products'));
        
        
        
        
        
        
    }




 public function show ($id) {
    
    
        $products= [
            
            ['id'=>'1','name'=>'Guantoni','description'=>'Ottimi per ogni sport da combattimento di tipo striking','price'=>'€40','img'=>'/image/gloves.jpeg',],
            ['id'=>'2','name'=>'Fasce da boxe','description'=>'Necessarie per prevenire le fratture della mano','price'=>'€10','img'=>'/image/boxing-hand-wrap-red.jpg',],
            ['id'=>'3','name'=>'Paratibie','description'=>'Ottime per muay thai e kick-boxing','price'=>'€50','img'=>'/image/paratibie.jpg',],
            ['id'=>'4','name'=>'Paradenti','description'=>'Proteggono i denti dai colpi','price'=>'€5','img'=>'/image/mouthguards.jpg',],
        ];
        
        
        
        foreach($products as $product){
    
            if($product['id']==$id){
                
                return view('webpages.productsDetail', compact('product'));
            }
        }
}}
