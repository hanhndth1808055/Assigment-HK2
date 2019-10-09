<?php

namespace App\Http\Controllers;

use App\GalleryImages;


class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showGallery()
    {
$galleryImages = GalleryImages::orderBy('created_at', 'DESC')->get();
        return view('pages.gallery', compact('galleryImages'));
    }

}
