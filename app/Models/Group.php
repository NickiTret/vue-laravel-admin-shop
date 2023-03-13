<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table = "groups";
    protected $guarded = false;

    public function products() {
        // отношения у групп с пробуктами
        return $this->hasMany(Product::class, 'group_id', 'id');
    }
}
