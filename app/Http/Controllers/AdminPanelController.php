<?php

namespace App\Http\Controllers;

use App\AboutContent;
use App\ActiviteitContent;
use App\CursusContent;
use App\CursusEntry;
use App\HomeContent;
use App\NieuwsContent;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminPanelController extends Controller
{
    public function index() {
        $HomeContent = HomeContent::all();
        $AboutContent = AboutContent::all();
        $ActiviteitContent = ActiviteitContent::all();
        $CursusContent = CursusContent::all();
        $CursusEntry = CursusEntry::all();
        $NieuwsContent = NieuwsContent::all();

        return view('adminpanel', [
            'HContent' => $HomeContent,
            'AContent' => $AboutContent,
            'ATContent' => $ActiviteitContent,
            'CContent' => $CursusContent,
            'CEContent' => $CursusEntry,
            'NContent' => $NieuwsContent,
        ]);
    }

    // Home admin

    public function showHome() {
        $HomeContent = HomeContent::all();

        return view('editpages.homeedit', ['HContent' => $HomeContent]);
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

        return redirect('/adminpanel');

    }

    // About admin

    public function showAbout() {
        $AboutContent = AboutContent::all();

        return view('editpages.aboutedit', ['AContent' => $AboutContent]);
    }

    public function updateAbout(Request $request, $id) {

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

        $AboutContent = AboutContent::where('id', $id)->first();

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

    // Cursus Page admin

    public function showCursus() {
        $CursusContent = CursusContent::all();

        return view('editpages.cursusedit', ['CContent' => $CursusContent]);
    }

    public function updateBasisCursus(Request $request, $id) {

        try {
            $this->validate($request, [
                'section1' => ['required', 'string'],
                'section2' => ['required', 'string'],
                'section3' => ['required', 'string'],
            ]);
        } catch (ValidationException $e) {
            echo $e;
        }

        $section1 = $request->get('section1');
        $section2 = $request->get('section2');
        $section3 = $request->get('section3');

        $CursusContent = CursusContent::where('id', $id)->first();

        $CursusContent->section1 = $section1;
        $CursusContent->section2 = $section2;
        $CursusContent->section3 = $section3;

        $CursusContent->save();

        return redirect('/adminpanel');
    }

    // Cursus Entry admin

    public function createCursusEntryView() {
        $CursusEntry = CursusEntry::all();

        return view('editpages.createcursusentry', ['CEContent' => $CursusEntry]);
    }

    public function createCursusEntry(Request $request) {

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

        $CursusEntry = new CursusEntry();

        $CursusEntry->title = $title;
        $CursusEntry->content = $content;

        $CursusEntry->save();

        return redirect('/adminpanel');
    }

    public function showCursusEntry() {
        $CursusEntry = CursusEntry::all();

        return view('editpages.cursusentryedit', ['CEContent' => $CursusEntry]);
    }

    public function updateCursusEntry(Request $request, $id) {

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

        $CursusEntry = CursusEntry::where('id', $id)->first();

        $CursusEntry->title = $title;
        $CursusEntry->content = $content;

        $CursusEntry->save();

        return redirect('/adminpanel');
    }

    public function deleteCursusEntry($id) {
        CursusEntry::find($id)->delete();

        return redirect('/adminpanel');
    }

    // Activiteit admin

    public function showActiviteit() {
        $ActiviteitenContent = ActiviteitContent::all();

        return view('editpages.activiteitedit', ['ATContent' => $ActiviteitenContent]);
    }

    public function updateActiviteit(Request $request, $id) {

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

    // Nieuws admin

    public function showNieuws() {
        $NieuwsContent = NieuwsContent::all();

        return view('editpages.nieuwsedit', ['NContent' => $NieuwsContent]);
    }

    public function updateNieuws(Request $request, $id) {

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

        $NieuwsContent = NieuwsContent::where('id', $id)->first();

        $NieuwsContent->section1 = $section1;
        $NieuwsContent->section2 = $section2;

        $NieuwsContent->save();

        return redirect('/adminpanel');

    }

}
