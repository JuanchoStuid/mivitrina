<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use Translatable;

    protected $translatable = ['med_h3'];

    protected $table = 'medias';

    protected $primaryKey ='med_id';

    protected $fillable = ['med_id', 'med_div_class', 'med_h3', 'med_video_audio'];

    // comentario

}
