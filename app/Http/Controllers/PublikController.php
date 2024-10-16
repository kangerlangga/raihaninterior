<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use Illuminate\Http\Request;

class PublikController extends Controller
{
    //Fungsi untuk halaman home
    public function home()
    {
        return view('pages.public.home', [
            'judul' => 'Home',
            'cHS' => HomeSlider::where('visib_home_sliders', 'Showing')->count(),
            'HomeSlider' => HomeSlider::where('visib_home_sliders', 'Showing')->get(),
        ]);
    }

    //Fungsi untuk halaman about
    public function about()
    {
        return view('pages.public.about', [
            'judul' => 'About Us',
        ]);
    }

    //Fungsi untuk halaman project
    public function project()
    {
        return view('pages.public.project', [
            'judul' => 'Our Project',
        ]);
    }

    //Fungsi untuk halaman contact
    public function contact()
    {
        return view('pages.public.contact', [
            'judul' => 'Contact Us',
        ]);
    }
}
