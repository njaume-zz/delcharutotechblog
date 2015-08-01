<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
<<<<<<< HEAD
    protected $primaryKey = 'id';
=======
>>>>>>> d24cd28afdd229ae8f66a8a41e0f15aa4fa732f1

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
<<<<<<< HEAD
    protected $fillable = ['id','name', 'email', 'password'];
=======
    protected $fillable = ['name', 'email', 'password'];
>>>>>>> d24cd28afdd229ae8f66a8a41e0f15aa4fa732f1

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
<<<<<<< HEAD
    
    public $timestamps = false;
    protected $dateFormat = 'U';


=======
>>>>>>> d24cd28afdd229ae8f66a8a41e0f15aa4fa732f1
}
