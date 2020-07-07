<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VragenController extends Controller
{
    public function vraagbeantwoord() {
        $contact = Contact::all();
        $user = Auth::user();
        return view('vraagbeantwoord', ['contact' => $contact, 'user' => $user]);
    }
    public function writeanswer(Request $request) {
        $methodid = $request->get('id');
        $methodtitle = $request->get('title');
        return view('writeAnswer', ['method' => $methodid, 'methodtitle' => $methodtitle]);
    }
    public function updatequestion(Request $request) {
        $method = $request->post('id');
        DB::table('contact')->where('contactid', '=', $method)->delete();
        return redirect('vraagbeantwoord');
    }
}
