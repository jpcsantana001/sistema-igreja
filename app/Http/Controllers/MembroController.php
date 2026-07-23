<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membro;

class MembroController extends Controller
{
 public function index()
{
    return view('membros');
}
public function store(Request $request)
{
    Membro::create([
        'nome' => $request->nome,
        'telefone' => $request->telefone,
        'endereco' => $request->endereco,
        'data_nascimento' => $request->data_nascimento,
    ]);

    return "Membro cadastrado com sucesso!";
}
}