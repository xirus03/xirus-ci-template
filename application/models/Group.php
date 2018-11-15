<?php 

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Group extends Eloquent {
    protected $table = 'aauth_groups';
    protected $fillable = ['name', 'definition'];
    public $timestamps = false;

    public function permissions() {
        return $this->belongsToMany(Permission::class, 'aauth_perm_to_group', 'group_id', 'perm_id');
    }
}