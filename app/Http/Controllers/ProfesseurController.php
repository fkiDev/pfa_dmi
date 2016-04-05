<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProfesseurController extends Controller
{

    public function __construct()
    {
        $this->middleware('Professeur');
    }
    public function index()
    {
        return view('profil.professeur.welcome');
    }


}
