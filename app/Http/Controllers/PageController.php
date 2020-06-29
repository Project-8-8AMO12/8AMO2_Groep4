<?php

namespace App\Http\Controllers;

use App\AboutContent;
use App\ActiviteitContent;
use App\CursusContent;
use App\CursusEntry;
use App\HomeContent;
use App\NieuwsContent;
use App\WinkelContent;
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

    public function activiteit() {
        $ActiviteitContent = ActiviteitContent::all();

        return view('activiteiten', ['Activiteiten' => $ActiviteitContent]);
    }

    public function cursus() {
        $CursusContent = CursusContent::all();
        $CursusEntry = CursusEntry::all();

        return view('cursus', [
            'CursusContent' => $CursusContent,
            'CursusEntry' => $CursusEntry
        ]);
    }

    public function news() {
        $NieuwsContent = NieuwsContent::all();

        return view('news', ['NieuwsContent' => $NieuwsContent]);
    }

    public function winkel() {
        $WinkelContent = WinkelContent::all();

        return view('winkel', ['WinkelContent' => $WinkelContent]);
    }

    public function error(Request $request) {
        $errorcode = $request->get('code');
        $errormessage = $request->get('message');

        return view('errors.error', ['code' => $errorcode, 'message' => $errormessage]);
    }

}
