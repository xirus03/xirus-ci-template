<?php 

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Permission extends Eloquent {
    protected $table = 'aauth_perms';
    public $timestamps = false;
}