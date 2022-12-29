<?php

namespace App\Http\Controllers;

use App\Models\Review;

class DashboardController extends Controller
{
    public function index()
    {
        $review = Review::get();
        return view('dashboards.list', [
            "title"         => "Dashboard",
            'dashboard'     => $review,
            "main"          => "Jakmall"
        ]);
    }
}
