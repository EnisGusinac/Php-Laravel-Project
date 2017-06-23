<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
   // protected $table = 'the_name_of_the_table';

    /* Here is protected 'white list of attributes'
    that Hackers cant see on actual URL
    */
    protected $fillable = [
        'user_id', 'content', 'live', 'post_on'
    ];

    protected $dates = ['post_on'];

    /*Guarded is used to specify  thenattributes that
     you dont want to be mass assignable
    */
  //  protected $quarded = ['id'];


    // Here is (boolean) Mutator for Live - On and Off
    public function setLiveAttribute($value)
    {
        $this->attributes['live'] = (boolean)($value);
    }

    public function getShortContentAttribute()
    {
       return substr($this->content, 0, random_int(100, 300)). '...';
    }

    public function setPostOnAttribute($value)
    {
        $this->attributes['post_on'] = Carbon::parse($value);
    }
}


