<?php

    namespace App\Models;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Technician extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'technician';

        protected $fillable = [
            'name', 'email', 'password','mobile','google_id','address','field',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }