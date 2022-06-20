<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Faker\Provider\bg_BG\PhoneNumber;

class DashboardController extends Controller
{
    public function sell(){
        return view('mystore.sell', [
            'posts' => Posts::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function store(Request $request)
    {
        // $request->$_POST([
        //     $_POST['name'] => 'name',
        //     $_POST['email'] => 'email',
        //     $_POST['title'] => 'title',
        //     $_POST['description'] =>'description',
        //     $_POST['prices']=>'prices',
        //     $_POST['phoneNumber'] => 'phoneNumber'
        // ]);

        // Posts::create($request);

        // session()->flash('completed', 'New Offer Added!');

        // return redirect('/sell');
    }

    // public function create(){
    //     return view('sell.create');
    // }
}
