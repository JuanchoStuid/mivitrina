<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use Translatable;

    protected $translatable = ['ski_div_style'];

    protected $table = 'skills';

    protected $primaryKey ='ski_id';

    protected $fillable = ['ski_id', 'ski_div_aria_valuenow', 'ski_div_aria_valuemin', 'ski_div_aria_valuemax', 'ski_div_style', 'ski_p', 'ski_span'];

    // comentario

}
