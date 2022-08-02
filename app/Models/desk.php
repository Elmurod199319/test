<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class desk extends Model
{
    use HasFactory;
    public $fillable =
        [
        'name'
        ];
    public function lists(){

            return $this->hasMany(desklist::class);
    }
}
