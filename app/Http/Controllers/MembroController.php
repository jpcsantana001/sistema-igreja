<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembroController extends Controller
{
 public function index()
{
    return view('membros');
}
public function store()
{
    return "Recebi os dados!";
}
}