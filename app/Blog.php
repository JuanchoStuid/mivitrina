<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use Translatable;

    protected $translatable = ['blo_div_p'];

    protected $table = 'blogs';

    protected $primaryKey ='blo_id';

    protected $fillable = ['blo_id', 'blo_data_wow_delay', 'blo_div_a_href', 'blo_a_img_src', 'blo_a_img_alt', 'blo_a_href_category', 'blo_a_i_head', 'blo_a_href_item_text', 'blo_a_href_h3', 'blo_div_p', 'blo_a_href_clock', 'blo_a_clock_text', 'blo_a_href_comments', 'blo_a_comments_text', 'blo_a_href_user', 'blo_a_user_text'];

    // comentario

}
