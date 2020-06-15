<?php

namespace App\Http\Controllers;

use App\AboutContent;
use App\CursusContent;
use App\HomeContent;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminPanelController extends Controller
{
    public function index() {
        $HomeContent = HomeContent::all();
        $AboutContent = AboutContent::all();
        $CursusContent = CursusContent::all();

        return view('adminpanel', [
            'HContent' => $HomeContent,
            'AContent' => $AboutContent,
            'CContent' => $CursusContent,
        ]);
    }

    // Home admin

    public function showHome() {
        $HomeContent = HomeContent::all();

        return view('homeedit', ['HContent' => $HomeContent]);
    }

    public function updateHome(Request $request, $id) {

        try {
            $this->validate($request, [
                'section1' => ['required', 'string'],
                'section2' => ['required', 'string'],
            ]);
        } catch (ValidationException $e) {
            echo $e;
        }

        $section1 = $request->get('section1');
        $section2 = $request->get('section2');

        $Homecontent = HomeContent::where('id', $id)->first();

        $Homecontent->section1 = $section1;
        $Homecontent->section2 = $section2;

        $Homecontent->save();

        return redirect('/');

    }

    // About admin

    public function showAbout() {
        $AboutContent = AboutContent::all();

        return view('aboutedit', ['AContent' => $AboutContent]);
    }

    public function updateAbout(Request $request) {
        try {
            $this->validate($request, [
                'intro' => ['required', 'string'],
                'title1' => ['required', 'string'],
                'section1' => ['required', 'string'],
                'title2' => ['required', 'string'],
                'section2' => ['required', 'string'],
                'title3' => ['required', 'string'],
                'section3' => ['required', 'string'],
            ]);
        } catch (ValidationException $e) {
            echo $e;
        }

        $intro = $request->get('intro');
        $title1 = $request->get('title1');
        $section1 = $request->get('section1');
        $title2 = $request->get('title2');
        $section2 = $request->get('section2');
        $title3 = $request->get('title3');
        $section3 = $request->get('section3');

        if (AboutContent::where('intro', '=', $intro)->exists()) {
            $AboutContent = AboutContent::where('intro', $intro)->first();

            $AboutContent->intro = $intro;
            $AboutContent->title1 = $title1;
            $AboutContent->section1 = $section1;
            $AboutContent->title2 = $title2;
            $AboutContent->section2 = $section2;
            $AboutContent->title3 = $title3;
            $AboutContent->section3 = $section3;

            $AboutContent->save();

            return redirect('/');
        } else {
            $AboutContent = new AboutContent();

            $AboutContent->intro = $intro;
            $AboutContent->title1 = $title1;
            $AboutContent->section1 = $section1;
            $AboutContent->title2 = $title2;
            $AboutContent->section2 = $section2;
            $AboutContent->title3 = $title3;
            $AboutContent->section3 = $section3;

            $AboutContent->save();

            return redirect('/');
        }

    }

    // Cursus admin

    public function showCursus() {
        $CursusContent = CursusContent::all();

        return view('cursusedit', ['CContent' => $CursusContent]);
    }

    public function updateCursus() {

    }

}
