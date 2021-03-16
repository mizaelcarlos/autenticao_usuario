<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Routing\Controller;



class AuthController extends Controller
{


    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function login()
    {
    	$usuario = 'mizael';
    	$senha = 'teste123';

        if (Auth::attempt(['usuario' => $usuario, 'password' => $senha]))
        {
             return redirect()->route('home');
        }
        else
        {

        	return response()->json([
            'retorno' => 'usuario '.$usuario.' senha '.bcrypt($senha)
        ], 201);
        }
    }

    public function logout()
    {
    	if (Auth::check())
		{
		    Auth::logout();

		    return redirect('welcome');
		}
    }
}
