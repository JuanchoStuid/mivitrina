<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use Translatable;

    protected $translatable = ['por_h3'];

    protected $table = 'portfolios';

    protected $primaryKey ='por_id';

    protected $fillable = ['por_id', 'por_div_class_mix', 'por_img_src', 'por_h3', 'por_div_span', 'por_precio', 'por_descripcion', 'por_descripcion_2', 'por_informacion', 'por_tags'];

    // comentario

}
