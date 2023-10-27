<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $booksByStatus = $request->user()?->books->groupBy('pivot.status');

        return view('home',[
            'booksByStatus' => $booksByStatus
        ]);
    }
}
