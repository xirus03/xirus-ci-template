<?php 

use \Illuminate\Database\Eloquent\Model as Eloquent;
use \Illuminate\Database\Eloquent\SoftDeletes;

class User extends Eloquent {
    use SoftDeletes;

    protected $table = "aauth_users"; // table name
    protected $fillable = ['email', 'username', 'pass'];
    protected $hidden = ['pass'];
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public function groups() {
        return $this->belongsToMany(Group::class, 'aauth_user_to_group', 'user_id');
    }
}