<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use Translatable;

    protected $translatable = ['pro_h3'];

    protected $table = 'productos';

    protected $primaryKey ='pro_id';

    protected $fillable = ['pro_id', 'pro_div_class_mix', 'pro_img_src', 'pro_h3', 'pro_div_span', 'pro_precio', 'pro_descripcion', 'pro_descripcion_2', 'pro_informacion', 'pro_tags', 'pro_img_slider', 'pro_img_thumbnail', 'pro_presentacion'];

    // comentario

}