<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Responsibility extends Model
{
    use HasFactory, SoftDeletes;
    public $table = 'responsibilities';

    protected $fillable = [
        'role_id',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'role_id', 'id');
    }
}
