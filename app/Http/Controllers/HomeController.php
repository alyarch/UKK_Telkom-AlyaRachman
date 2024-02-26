<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Foto;


class HomeController extends Controller

{

    public function index()

    {

        $photos = Foto::all();
        return view('home', ['photos' => $photos]);

    }

}
