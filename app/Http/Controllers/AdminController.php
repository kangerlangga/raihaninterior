<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\HomeSlider;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //Fungsi untuk halaman dashboard
    public function index()
    {
        $now = time();
        $fiveMinutesAgo = $now - 300;
        $data = [
            'judul' => 'Dashboard',
            'cH' => HomeSlider::count(),
            'cP' => Project::count(),
            'cC' => Comment::count(),
            'cMC' => '1',
            'cVO' => DB::table('sessions')->where('last_activity', '>=', $fiveMinutesAgo)->count(),
        ];
        return view('pages.admin.dashboard', $data);
    }
}
