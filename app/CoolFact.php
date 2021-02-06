<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class CoolFact extends Model
{
    use Translatable;

    protected $translatable = ['coo_h4_text'];

    protected $table = 'cools_facts';

    protected $primaryKey ='coo_id';

    protected $fillable = ['coo_id', 'coo_data_wow_delay', 'coo_i_class_icon', 'coo_h3_span_numero', 'coo_h4_text'];

    // comentario

}
