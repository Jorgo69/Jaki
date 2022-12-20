<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    //

    public function AdDash()
    {
        return view('indexDashboard');
    }

    public function AddCours()
    {
        return view('AddCours');
    }

    public function adminTransaction()
    {
        return view('AdminDashTransaction');
    }
}