<?php

namespace App\Http\Controllers;

use App\AboutContent;
use App\CursusContent;
use App\HomeContent;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $HomeContent = HomeContent::all();

        return view('index', ['Home' => $HomeContent]);
    }

    public function about() {
        $AboutContent = AboutContent::all();

        return view('about', ['About' => $AboutContent]);
    }

    public function cursus() {
        $CursusContent = CursusContent::all();

        return view('cursus', ['Content' => $CursusContent]);
    }

    public function error(Request $request) {
        $errorcode = $request->get('code');
        $errormessage = $request->get('message');

        return view('auth.error', ['code' => $errorcode, 'message' => $errormessage]);
    }

}
