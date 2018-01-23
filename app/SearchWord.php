<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchWord extends Model
{
    //
    protected $fillable = ['keyword', 'ip', 'search_count'];
}
