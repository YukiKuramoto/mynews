<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request){
      $id = $request->id;
      $profile = Profile::find($id);
      return view('profile.index', ['profile' => $profile]);
    }
}
