<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use Translatable;

    protected $translatable = ['sli'];

    protected $table = 'sliders';

    protected $primaryKey ='sli_id';

    protected $fillable = ['sli_id', 'sli_li_data_slide_to', 'sli_li_class', 'sli_div_class_item', 'sli_style_url_img', 'sli_h2', 'sli_h3', 'sli_i_class', 'sli_a_texto'];

    // comentario

}
