<?php 

use \Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {

    protected $table = "aauth_users"; // table name
    protected $fillable = ['email', 'username', 'pass'];
    protected $hidden = ['pass'];
    public $timestamps = false;

    public function groups() {
        return $this->belongsToMany(Group::class, 'aauth_user_to_group', 'user_id');
    }
}