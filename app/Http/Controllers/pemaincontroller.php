<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemain; // Add this line to import the pemain model

class pemaincontroller extends Controller
{
    public function index()
    {
        $pemain = pemain::all();
        return view('index.tabel', compact('pemain'));
    }
}
