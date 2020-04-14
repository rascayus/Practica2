<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       /*  $user=Auth::user();
        return view('home',compact('user')); */
       // $request->session()->put(['Juan'=>'Administrador']);
       // session(['Maria'=>'Estudiante']);
       //$request->session()->forget('Juan');
       //$request->session()->flush();
      // $request->session()->flash('entrada 10', 'Éxito 10');
       //$request->session()->reflash();
      // $request->session()->keep(['Juan Diego', 'Administrador']);
         $request->session()->regenerate();
        return $request->session()->all();

    }
}
