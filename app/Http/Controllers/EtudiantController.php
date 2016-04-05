<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EtudiantController extends Controller
{
    public function __construct()
    {
        $this->middleware('Etudiant');
    }
    public function index(){
        return view('profil.etudiant.welcome');
    }
}
