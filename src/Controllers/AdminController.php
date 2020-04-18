<?php

namespace Tir\FirstPanel\Controllers;
use Illuminate\Routing\Controller;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('first-panel::pages.dashboard');
    }
}
