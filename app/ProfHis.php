<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfHis extends Model
{
    protected $guarded = array('id');
    protected $table = 'profhis';

    public static $rules = array(
      'prof_id' => 'required',
      'edited_at' => 'required',
    );
}
