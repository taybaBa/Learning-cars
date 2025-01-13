<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class HomeController extends Controller
{
    public function index()
    {
//        return View::make('home.index');


        return view('home.index')->with('name','Tayyba')->with('surname','bashir')->with('job','<b>Software Engineer</b>')
            ->with('hobbies',['<b>Reading</b>','<b>Writing</b>'])
            ->with('country','Pakistan')
            ->with('cars',['bmw','toyaita','honda']);

    }
}
