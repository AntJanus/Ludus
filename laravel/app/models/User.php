<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface{

    protected $table = 'users';

    protected $hidden = array('password');

    protected $fillable = array('email', 'username', 'name');

    public function links()
    {
        return $this->hasMany('Link');
    }

    public function posts()
    {
        return $this->hasMany('Post');
    }

    public function permissions()
    {
        return $this->belongsToMany('Permission');
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getReminderEmail()
    {
        return $this->email;
    }
}
