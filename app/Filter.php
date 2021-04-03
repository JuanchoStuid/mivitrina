<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    use Translatable;

    protected $translatable = ['fil_data_name'];

    protected $table = 'filters';

    protected $primaryKey ='fil_id';

    protected $fillable = ['fil_id', 'fil_data_name', 'fil_data_filter'];

    // comentario

}
