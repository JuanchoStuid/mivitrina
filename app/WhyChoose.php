<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class WhyChoose extends Model
{
    use Translatable;

    protected $translatable = ['why_h2'];

    protected $table = 'whyschooses';

    protected $primaryKey ='why_id';

    protected $fillable = ['why_id', 'why_data_wow_delay', 'why_i_class', 'why_h2', 'why_p'];

    // comentario

}
