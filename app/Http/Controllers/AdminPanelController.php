<?php

namespace App\Http\Controllers;

use App\AboutContent;
use App\ActiviteitContent;
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
        $ActiviteitContent = ActiviteitContent::all();

        return view('adminpanel', [
            'HContent' => $HomeContent,
            'AContent' => $AboutContent,
            'CContent' => $CursusContent,
            'ATContent' => $ActiviteitContent,
        ]);
    }

    // Home admin

    public function showHome() {
        $HomeContent = HomeContent::all();

        return view('homeedit', ['HContent' => $HomeContent]);
    }

    public function updateHome(Request $request) {

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

        $Homecontent = HomeContent::where('id', 1)->first();

        $Homecontent->section1 = $section1;
        $Homecontent->section2 = $section2;

        $Homecontent->save();

        return redirect('/adminpanel');

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

        $AboutContent = AboutContent::where('id', 1)->first();

        $AboutContent->intro = $intro;
        $AboutContent->title1 = $title1;
        $AboutContent->section1 = $section1;
        $AboutContent->title2 = $title2;
        $AboutContent->section2 = $section2;
        $AboutContent->title3 = $title3;
        $AboutContent->section3 = $section3;

        $AboutContent->save();

        return redirect('/adminpanel');
    }

    // Cursus admin

    public function showCursus() {
        $CursusContent = CursusContent::all();

        return view('cursusedit', ['CContent' => $CursusContent]);
    }

    public function updateCursus() {
        return redirect('/adminpanel');
    }

    // Home admin

    public function showActiviteiten() {
        $ActiviteitenContent = ActiviteitContent::all();

        return view('activiteitedit', ['ATContent' => $ActiviteitenContent]);
    }

    public function updateActiviteiten(Request $request, $id) {

        try {
            $this->validate($request, [
                'title' => ['required', 'string'],
                'content' => ['required', 'string'],
            ]);
        } catch (ValidationException $e) {
            echo $e;
        }

        $title = $request->get('title');
        $content = $request->get('content');

        $ActiviteitenContent = ActiviteitContent::where('id', $id)->first();

        $ActiviteitenContent->title = $title;
        $ActiviteitenContent->content = $content;

        $ActiviteitenContent->save();

        return redirect('/adminpanel');

    }

}
