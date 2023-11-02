<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use App\Models\Keynote;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index() : View {
        
        $conferences = Conference::latest()->take(4)->get();
        $keynotes = Keynote::all();
        // dd($conferences);
        return view('web.home.index', compact('conferences', 'keynotes'));
    } 
}
