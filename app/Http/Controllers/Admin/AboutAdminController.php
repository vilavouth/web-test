<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutAdminController extends Controller
{
    public function about()
    {
        return view('user.about.about');
    }

    public function update()
    {
        return view('user.about.update');
    }
    public function insert()
    {
        return view('user.about.insert');
    }
}
