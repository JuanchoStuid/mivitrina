<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class OtherService extends Model
{
    use Translatable;

    protected $translatable = ['oth_div_h3'];

    protected $table = 'other_services';

    protected $primaryKey ='oth_id';

    protected $fillable = ['oth_id', 'oth_article_class', 'oth_data_wow_delay', 'oth_i_class', 'oth_div_h3', 'oth_div_p'];

    // comentario

}
