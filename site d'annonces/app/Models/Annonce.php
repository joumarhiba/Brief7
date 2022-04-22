<?php

namespace App\Models;

use App\Models\like;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Annonce extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'entreprise',
        'ville',
        'description',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function deletedBy(User $user){
        return $user->id ===$this->user_id;
    }

    public function likeBy(User $user){
        return $user->id !== $this->user_id;
    }

    public function likes(){
        return $this->hasMany(like::class);
    }

    public function likedBy(User $user){
        return $this->likes->contains('user_id',$user->id);
    }
}
