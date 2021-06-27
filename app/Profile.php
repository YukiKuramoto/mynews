<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// PHP/Laravel14　課題５
class Profile extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
      'name' => 'required',
      'gender' => ['required', 'size:2'],
      'hobby' => 'required',
      'introduction' => 'required',
    );

    public function profhistories()
    {
      return $this->hasMany('App\ProfHis', 'prof_id');
    }
}
