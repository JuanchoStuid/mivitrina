<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class ServiceBlock extends Model
{
    use Translatable;

    protected $translatable = ['ser_h2'];

    protected $table = 'services_block';

    protected $primaryKey ='ser_id';

    protected $fillable = ['ser_id', 'ser_data_wow_delay', 'ser_div_div_i_class', 'ser_h2', 'ser_p', 'ser_a_href_btn', 'ser_a_text_btn'];

    // comentario

}
