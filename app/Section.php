<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use Translatable;

    protected $translatable = ['sec_enlace'];

    protected $table = 'sections';

    protected $primaryKey ='sec_id';

    protected $fillable = ['sec_id', 'sec_enlace', 'sec_seccion', 'sec_valor', 'sec_imagen', 'sec_activado'];

    // comentario

}
