<?php

namespace App\Http\Controllers;

use App\Models\JazzineerGig;
use Illuminate\Http\Request;

class JazzineerGigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monthlist = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $yearlist = ['2021', '2022'];

        return view('admin.jazzineer-gigs.index', [
            'title'     => 'Jazzineer Gigs',
            'contents'  => JazzineerGig::all(),
            'months'    => $monthlist,
            'years'     => $yearlist
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jazzineer-gigs.create', [
            'title' => 'Tambah Konten Jazzineer Gigs'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'event' => 'required',
            'date'  => 'required',
            'file'  => 'required|max:1024|mimes:png,jpg,jpeg'
        ]);

        if ($request->hasFile('file')) {
            $fileName = $validated['event'] . '-' . $validated['date'] . '-image.' . $request->file->extension();
            $request->file->move(public_path('img/jazzineer-gigs'), $fileName);
            $validated['file']  = $fileName;
            JazzineerGig::create($validated);
            return redirect('admin/jazzineer-gigs')->with('notif', 'Content created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JazzineerGig  $jazzineerGig
     * @return \Illuminate\Http\Response
     */
    public function show(JazzineerGig $jazzineerGig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JazzineerGig  $jazzineerGig
     * @return \Illuminate\Http\Response
     */
    public function edit(JazzineerGig $jazzineerGig)
    {
        return view('admin.jazzineer-gigs.edit', [
            'title'         => 'Ubah Konten Jazzineer Gigs',
            'content'       => $jazzineerGig
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JazzineerGig  $jazzineerGig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JazzineerGig $jazzineerGig)
    {
        $validated = $request->validate([
            'event' => 'required',
            'date'  => 'required',
            'file'  => 'max:1024|mimes:png,jpg,jpeg'
        ]);

        if ($request->hasFile('file')) {
            unlink(public_path('img/jazzineer-gigs/') . $jazzineerGig->file);

            $fileName = $validated['event'] . '-' . $validated['date'] . '-image.' . $request->file->extension();
            $request->file->move(public_path('img/jazzineer-gigs'), $fileName);
            $validated['file']  = $fileName;
        }
        $jazzineerGig->update($validated);
        return redirect('admin/jazzineer-gigs')->with('notif', 'Content created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JazzineerGig  $jazzineerGig
     * @return \Illuminate\Http\Response
     */
    public function destroy(JazzineerGig $jazzineerGig)
    {
        $jazzineerGig->delete();
        return redirect('admin/jazzineer-gigs')->with('notif', 'Content deleted');
    }
}
