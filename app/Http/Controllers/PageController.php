<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;


class WelcomeController extends Controller
{
    public function skills(){
        $skills = skill::all();
        return view('page/skills', compact('skills'));
    }
    
    public function gallery(){
        return view('page/gallery');
    }
 
}

