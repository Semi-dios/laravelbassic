<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table ='projects';
    protected $guarded = [];//No working with request()->old()
    /* protected $fillable = ['title','description','url']; */


    public function getRouteKeyName() {
        return 'url';
    }
}
