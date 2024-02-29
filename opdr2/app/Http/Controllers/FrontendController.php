<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function about()
    {
        $student = ['student_0' => 12, 'student_1' => 16, 'student_2' => 18, 'student_3' => 15, 'student_4' => 21, 'student_5' => 20];

        return view('frontend.about', ['student' => $student]);
    }

    public function contact()
    {
        $kleur = 'rood';
        return view('frontend.contact', ['kleur' => $kleur]);
    }
}
