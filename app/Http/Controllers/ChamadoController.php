<?php

/*
 * Geralmente os controladores são usados para manipular os dados, são eles quem executam as regras de negócio.
 * Enviam e recebem dados e retornam estes dados para uma view ou redirecionam para outra rota.
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ChamadoController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
