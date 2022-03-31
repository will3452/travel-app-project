<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
class User extends Eloquent
{
    const TYPE_MANAGER = 'Manager';
    const TYPE_TRAVELER = 'Traveler';
    const TYPE_ADMIN = 'Admin';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'phone',
        'email',
        'password',
        'type',
        'manager_type',
        'image',
        'status',
        'subscribed_at'
    ];
}
