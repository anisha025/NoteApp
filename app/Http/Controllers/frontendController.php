<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function welcome()
    {
        $notes = Note::all();
        return view('welcome', compact('notes'));
    }
}
