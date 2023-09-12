<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Place extends Model
{
    use HasUuids;
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','address'
    ];
}
