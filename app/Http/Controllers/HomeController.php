<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contestant;

class HomeController extends Controller
{
    public function index(){

    	$participante = Contestant::all();

    	return view('welcome', compact('participante'));
    }

    public function contacto(){
    	return view('contacts');
    }

    public function register_contestant(Request $request){

		$new_participante = Contestant::create($request->all() );

		return redirect()->route('home');

    }
}	