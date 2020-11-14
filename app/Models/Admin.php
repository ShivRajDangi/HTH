<?php

    namespace App\Models;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Admin extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'admin';

        protected $fillable = [
            'full_name','nice_name', 'email', 'password','mobile','profile_photo','role',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }