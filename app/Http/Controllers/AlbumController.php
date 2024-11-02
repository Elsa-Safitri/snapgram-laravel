<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use Illuminate\support\Facades\Auth;

class AlbumController extends Controller {
    public function index() {
        $albums = Album::where('userID', Auth::id())->get();
        return view('albums.index', compact('albums'));
    }
    

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Album $album)
    {
        //
    }

    public function update(Request $request, Album $album)
    {
        //
    }

    public function destroy(Album $album)
    {
        //
    }
}
