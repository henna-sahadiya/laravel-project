<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class master extends Controller
{
    public function searchfun()
    {
        $record = User::orderBy('name', 'asc')->get();
        return view('user', compact('record'));
    }

    public function searchPostFun(Request $req)
{
    $search = $req->search;

    // Ensure the search term is properly sanitized
    $search = trim($search);

    // Perform the search query
    $record = User::where(function($query) use ($search) {
        $query->where('name', 'like', "%$search%")
              ->orWhere('fk_designation', 'like', "%$search%");
    })
    ->orWhereHas('department', function($query) use ($search) {
        $query->where('name', 'like', "%$search%");
    })
    ->get();

    return view('user', compact('record', 'search'));
}


}


