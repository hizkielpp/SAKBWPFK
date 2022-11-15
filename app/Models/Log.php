<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User','id_user');
    }
    protected $fillable = [
        'id_user',
        'name',
        'pre',
        'post',
        'keterangan'
    ];
}
