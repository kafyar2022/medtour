<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('pages.about.index');
    }

    public function gallery()
    {
        return view('pages.gallery.index');
    }

    public function services()
    {
        return view('pages.services.index');
    }

    public function worksystem()
    {
        return view('pages.worksystem.index');
    }

    public function countries()
    {
        return view('pages.countries.index');
    }

    public function partners()
    {
        return view('pages.partners.index');
    }

    public function reviews()
    {
        return view('pages.reviews.index');
    }

    public function contacts()
    {
        return view('pages.contacts.index');
    }
}
