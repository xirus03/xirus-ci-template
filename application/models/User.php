<?php 

use \Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {

    protected $table = "aauth_users"; // table name
    protected $fillable = ['email', 'username', 'pass'];
    protected $hidden = ['pass'];
    public $timestamps = false;
}