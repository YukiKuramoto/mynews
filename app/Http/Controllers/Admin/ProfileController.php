<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\ProfHis;
use Carbon\Carbon;

class ProfileController extends Controller
{

  public function add()
  {
    return view('admin.profile.create');
  }

  public function create(Request $request)
  {
    $this->validate($request, Profile::$rules);
    $profile = new Profile;
    $forms = $request->all();

    unset($forms['_token']);

    $profile->fill($forms);
    $profile->save();

    return redirect('admin/profile/create');
  }

  public function edit(Request $request)
  {
    $id = $request->id;
    $profile = Profile::find($id);
    return view('admin.profile.edit', ['profile' => $profile]);
  }

  public function update(Request $request)
  {
    $this->Validate($request, Profile::$rules);
    $prof = Profile::find($request->id);
    $prof_form = $request->all();
    unset($prof_form['_token']);
    $prof->fill($prof_form)->save();

    $profhis = new ProfHis;
    $profhis->prof_id = $prof_form['id'];
    $profhis->edited_at = Carbon::now();
    // dd($profhis);
    $profhis->save();
    // dd($prof);
    return redirect('admin/news');
  }

    //
}
