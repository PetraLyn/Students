<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class studentscontroller extends Controller
{
   function index(){
        

      
         $students=\App\students::all();
         return view('students',['students'=>$students]);

       }  
}


    
        
   