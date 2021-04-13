<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use Translatable;

    protected $translatable = ['abo_titulo_principal'];

    protected $table = 'abouts';

    protected $primaryKey ='abo_id';

    protected $fillable = ['abo_id', 'abo_h3_titulo_principal', 'abo_img_class', 'abo_img_src', 'abo_img_alt', 'abo_img_p', 'abo_h3_titulo_secundario'];

    // comentario

}
