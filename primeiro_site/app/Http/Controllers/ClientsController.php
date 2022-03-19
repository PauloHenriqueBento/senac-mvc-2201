<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class ClientsController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function listar(){

        $clients = Clients::all();

        return view('clients.listar', ['clients'=>$clients]);
    }
}
