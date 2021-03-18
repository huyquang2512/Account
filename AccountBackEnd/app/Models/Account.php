<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable=[
        "id",
        "username",
        "password",
        "email",
        "address",
        "age",
        "sex",
    ];
    protected $table = 'accounts';
    public $timestamps = false;
}