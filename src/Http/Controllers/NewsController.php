<?php

namespace DMCode\NewsPackage\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Routing\Controller;

class NewsController extends Controller
{

    public function index()
    {
        return Inertia::render('news');
    }
}