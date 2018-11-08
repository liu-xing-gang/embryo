<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    //
    protected $table = 'site';

    protected $fillable = [
        'site_name', 'site_domain', 'site_title','site_keywords','site_description','site_copyright'
    ];
}
