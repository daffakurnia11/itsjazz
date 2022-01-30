<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('main.index', [
            'title'     => '#WeAreJazzineer'
        ]);
    }

    public function about()
    {
        return view('main.about', [
            'title'     => 'About Us'
        ]);
    }

    public function segment()
    {
        return view('main.segment', [
            'title'     => 'ITS Jazz Segment'
        ]);
    }

    public function jazzineer_gigs()
    {
        return view('main.jazzineer-gigs', [
            'title'     => 'Jazzineer Gigs'
        ]);
    }

    public function konser()
    {
        return view('main.konser', [
            'title'     => 'Konser 1 Dekade'
        ]);
    }

    public function merchandise()
    {
        return view('main.merchandise', [
            'title'     => 'Merchandise'
        ]);
    }

    public function join()
    {
        return view('main.join', [
            'title'     => 'Join Us'
        ]);
    }

    public function subscription(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required|email:dns'
        ]);

        if ($validator->fails()) {
            return back()->with('message', 'Subscription Failed!');
        }

        Subscription::create($request->all());
        return back()->with('message', 'Subscription Success!');
    }
}
