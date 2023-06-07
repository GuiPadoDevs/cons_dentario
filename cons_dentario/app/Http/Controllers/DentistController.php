<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dentist;

class DentistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard/dentist/index');
    }

    public function create()
    {
        return view('dashboard/dentist/create');
    }

    public function salvar_novo(Request $dados) {
        $dentist = new Dentist;
        $dentist->nome = $dados->input("nome");
        $dentist->estado_id = $dados->input("estado_id");
        $dentist->save();

        return redirect('/cidade');
}
}
