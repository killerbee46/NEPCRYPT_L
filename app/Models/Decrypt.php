<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decrypt extends Model
{
    use HasFactory;
    protected $fillable = [
        "decrypted",
        "decryption_method",
        "user_id",
    ];
    protected $guarded = ['role_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
