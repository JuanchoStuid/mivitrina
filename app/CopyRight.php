<?php

namespace App;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class CopyRight extends Model
{
    use Translatable;

    protected $translatable = ['cop_copy_right_text'];

    protected $table = 'copies_rights';

    protected $primaryKey ='cop_id';

    protected $fillable = ['cop_id', 'cop_copy_right_text', 'cop_pull_right_text'];

    // comentario

}
