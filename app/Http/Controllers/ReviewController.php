<?php

namespace App\Http\Controllers;

use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $review = Review::with('product')->get();
        return view('reviews.list', [
            "title"         => "Review Detail",
            'review'        => $review,
            "main"          => "Jakmall"
        ]);
    }
}
