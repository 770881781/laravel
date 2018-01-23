<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','content','created_at','intro'];
  
    public function scopePublished($query)
    {
        $query->where('created_at','<=',Carbon::now());
    }
}
