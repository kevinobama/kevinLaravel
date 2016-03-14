<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'edu_common_subjects';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['subject_name'];

}
