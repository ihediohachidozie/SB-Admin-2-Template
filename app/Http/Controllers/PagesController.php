<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getDashboard(){
        return view('pages/dashboard');
    }

    public function getLogin(){
        return view('pages/login');
    }

    public function getRegister(){
        return view('pages/register');
    }

    public function getForgotPassword(){
        return view('pages/forgot-password');
    }

    public function getBlank(){
        return view('pages/blank');
    }

}
