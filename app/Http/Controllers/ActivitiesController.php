<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
   public function index() {
    
    
        $activities = [
            
          
            
                ['id'=>'1','name'=>'Karate','description'=>'Antica arte marziale di autodifesa','img'=>'/image/Karate.jpg',],
                ['id'=>'2','name'=>'Muaythai','description'=>'Calci, pugni, gomitate e ginocchiate','img'=>'/image/Muaythai.jpg',],
                ['id'=>'3','name'=>'jujutsu','description'=>'Combattimento a terra e proiezioni','img'=>'/image/jujitsu.jpg',],
                ['id'=>'4','name'=>'boxe','description'=>'La nobile arte','img'=>'/image/boxe.jpg',],
            
            
        ];
    
    
        return view('webpages.activitiesPage', compact('activities'));
    
    
       
       
    
       
    }



   public function show($id) {
    
    
        $activities = [
            
          
            
                ['id'=>'1','name'=>'Karate','description'=>'Antica arte marziale di autodifesa','img'=>'/image/Karate.jpg',],
                ['id'=>'2','name'=>'Muaythai','description'=>'Calci, pugni, gomitate e ginocchiate','img'=>'/image/Muaythai.jpg',],
                ['id'=>'3','name'=>'jujutsu','description'=>'Combattimento a terra e proiezioni','img'=>'/image/jujitsu.jpg',],
                ['id'=>'4','name'=>'boxe','description'=>'La nobile arte','img'=>'/image/boxe.jpg',],
            
            
        ];
    
    
    
    
    
    
    
        foreach($activities as $activity){
    
            if($activity['id']==$id){
    
    
                return view('webpages.activitiesDetail', compact('activity'));
                
                
            }
    
    
            
    
    
        }
        
    
       
       
    
       
    }
}
