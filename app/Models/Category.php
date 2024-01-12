<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
<<<<<<< HEAD

class Category extends Authenticatable
=======
use App\Models\Comment;

class Blog extends Authenticatable
>>>>>>> 51a86032bec9577a2d748406b8c561116577611b
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
<<<<<<< HEAD
    protected $fillable = [
        'name',
        'email',
        'password',
=======
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'description',
        'category_name',
        'user_id',
>>>>>>> 51a86032bec9577a2d748406b8c561116577611b
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
<<<<<<< HEAD
    protected $hidden = [
        'password',
        'remember_token',
    ];
=======
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];
>>>>>>> 51a86032bec9577a2d748406b8c561116577611b

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
<<<<<<< HEAD
=======

>>>>>>> 51a86032bec9577a2d748406b8c561116577611b
}
