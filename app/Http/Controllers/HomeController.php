<?php

namespace misexamenes\Http\Controllers;

use Illuminate\Http\Request;
use misexamenes\Examen;
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
    public function index()
    {
    $data['examenes'] = Examen::all();
    // foreach ($examenes as $examen) {
    //     echo $examen->materia .' ' . $examen->fecha."</br>";
    // }
    return view('home',$data);

}

}
