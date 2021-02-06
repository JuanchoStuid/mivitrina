<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use Translatable;

    protected $translatable = ['tea_h2'];

    protected $table = 'teams';

    protected $primaryKey ='tea_id';

    protected $fillable = ['tea_id', 'tea_data_wow_delay', 'tea_figure_img_src', 'tea_img_alt', 'tea_h2', 'tea_p', 'tea_a_href_facebook', 'tea_a_href_twitter', 'tea_a_href_linkedin', 'tea_a_href_google_plus'];

    // comentario

}
