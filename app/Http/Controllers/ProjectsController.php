<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectsController extends Controller
{
    public function index(){
      return view('projects.index');
    }
}
