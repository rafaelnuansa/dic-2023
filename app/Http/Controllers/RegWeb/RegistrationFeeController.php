<?php

namespace App\Http\Controllers\RegWeb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationFeeController extends Controller
{
    public function index(Conference $conference){
        return view('web.conference.registrationfee');
    }
}
