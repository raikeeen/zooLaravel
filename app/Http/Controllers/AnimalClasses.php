<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animalclass;
use Illuminate\View\View;

class AnimalClasses extends Controller
{
    public function index(){
        $classes=Animalclass::all();
        return View('animalclasses.index',['classList'=>$classes]);
    }

    public function create(Request $request){
        $newAnimalClass=new Animalclass();
        $newAnimalClass->titles=$request->input('newclass');
        $newAnimalClass->save();

        return redirect(route('animal-class'));

    }
    public function displayCreate(){
        return View('animalclasses.create');
    }

}

