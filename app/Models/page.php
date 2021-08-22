<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'title',
        'topic',
    ];

    public function user() {
        return $this->hasMany(User::class, 'foreign_key');
    }

    protected $primaryKey = 'id';
}
