<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Setti extends Model
{
    use Translatable;

    protected $translatable = ['display_name'];

    protected $table = 'settings';

    protected $primaryKey ='id';

    protected $fillable = ['id', 'key', 'display_name', 'value', 'details', 'type', 'order', 'group'];

    // comentario

}
