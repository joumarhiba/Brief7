<?php

namespace App\Models;

use App\Models\dlike;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Demandes extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'title',
        'contrat',
        'ville',
        'description',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function deletedBy(User $user){
        return $user->id === $this->user_id;
    }

    public function likeBy(User $user){
        return $user->id !== $this->user_id;
    }

    public function likes(){
        return $this->hasMany(dlike::class);
    }

    public function likedBy(User $user){
        return $this->likes->contains('user_id',$user->id);
    }
}
