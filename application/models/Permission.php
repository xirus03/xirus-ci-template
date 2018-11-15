<?php 

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Permission extends Eloquent {
    protected $table = 'aauth_perms';
    protected $fillable = ['name', 'definition'];
    public $timestamps = false;

    public function groups() {
        return $this->belongsToMany(Group::class, 'aauth_perm_to_group', 'perm_id');
    }
}