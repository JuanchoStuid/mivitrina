<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use Translatable;

    protected $translatable = ['prs_div_h3'];

    protected $table = 'progress';

    protected $primaryKey ='prs_id';

    protected $fillable = ['prs_id', 'prs_div_class', 'prs_data_wow_delay', 'prs_i_class', 'prs_div_h3', 'prs_div_p'];

    // comentario

}
