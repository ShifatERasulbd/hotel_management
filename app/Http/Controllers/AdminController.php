<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        // Logic for the admin dashboard
        return view('backend.index'); // Ensure this view exists
    }
}
