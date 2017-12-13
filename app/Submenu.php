<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $table      = 'submenu';
    protected $primaryKey = 'idsubmenu';
    protected $fillable   = [
        'namesumenu',
        'url',
        'icon',
        'idmenu'];
}
