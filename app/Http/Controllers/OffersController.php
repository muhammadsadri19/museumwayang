<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Offers;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        return view('offers', [
            "title" => "Store :",
            "active" => 'offers'
        ]);
    }
};