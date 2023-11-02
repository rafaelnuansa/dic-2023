<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use App\Models\Keynote;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConferenceController extends Controller
{
    public function index() : View {
  
        $conferences = Conference::latest()->paginate(8);
        return view('web.conferences.index', compact('conferences'));
    } 

    public function show($shorname) {
        $conference = Conference::where('shortname', $shorname)->firstOrFail();
        
        return view('web.conferences.show', compact('conference'));
    }
}
