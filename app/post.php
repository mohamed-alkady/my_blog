<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
   

     // add by figo this is relationship between user and post 
        public function user()
        {
            return $this->belongsTo('App\User');
        }
        
    
             // add by figo this is relationship between comments and post             
        public function comments(){

             return $this->hasMany('App\Comment');
         
        }


             // by mohamed this is relation between tags or catogrey and post
        public function tags(){
            return $this->belongsToMany('App\tag'); 
               }

    }