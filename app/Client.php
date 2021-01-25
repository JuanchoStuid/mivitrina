<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use Translatable;

    protected $translatable = ['cli_div_img_alt'];

    protected $table = 'clients';

    protected $primaryKey ='cli_id';

    protected $fillable = ['cli_id', 'cli_div_img_src', 'cli_img_alt'];

    // comentario

}
