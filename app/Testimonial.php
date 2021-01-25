<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use Translatable;

    protected $translatable = ['tes_div_p'];

    protected $table = 'testimonials';

    protected $primaryKey ='tes_id';

    protected $fillable = ['tes_id', 'tes_div_class_active', 'tes_img_src', 'tes_div_p', 'tes_div_span_name', 'tes_div_span_company'];

    // comentario

}
