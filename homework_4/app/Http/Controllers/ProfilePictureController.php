<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ProfilePictureRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProfilePictureController extends Controller
{
    public function create()
    {
    return view('picture.picture');
    }

    public function store(ProfilePictureRequest $request)
    {
        $request->validate([
            'picture' => 'required|image|max:2048', 
        ]);

        $file = $request->file('picture');
        $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $fileName);

        return 'Profile picture uploaded successfully!';
    }
}