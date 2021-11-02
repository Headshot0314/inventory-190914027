<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //Membuat artibut name
    private $name = 'Lathief Sentika';
    private $code = '190914027';

    public function index(){
        return $this->name . " " . $this->code;
       
    }
    public function show($param){
        $this->name = $param;
        return $this->name;
    }
}
