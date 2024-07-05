<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDocument extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','id_type','country','identification_no','date_of_birth','expiration_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
