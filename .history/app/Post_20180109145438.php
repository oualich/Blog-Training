<?php

/*
 * Created on Tue Jan 09 2018
 *
 * Copyright (c) 2018 Your Company
 */
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use SoftDeletes;
    //
    //  protected $table = 'posts';

    //  protected $primaryKey = 'post_id';
    protected $dates = ['deleted_at'];


    protected $fillable = [
        'title',
        'content'
    ];
    public function user(){

        return $this->belongsTo('App\User'); 
          
    }
    
}
