<?php 

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Group extends Eloquent {
    protected $table = 'aauth_groups';
    public $timestamps = false;
}