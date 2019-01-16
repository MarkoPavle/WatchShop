<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps=false;
    /*protected $fillable = [
        'name', 'email', 'password',
    ];*/

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /*protected $hidden = [
        'password', 'remember_token',
    ];*/

    public $email;
    public $password;

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function checkUser()
    {
        $query = User::with('role')->where([
            'email' => $this->email,
            'password' => md5($this->password)
        ]);

        // Execute query
        $user = $query->first();

        if ($user) {
            return $user;
        }
        return false;
    }

}
