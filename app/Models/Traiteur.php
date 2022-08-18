<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traiteur extends Model
{
    use HasFactory;
    protected $table= 'traiteur';
    protected $primarykey= 'id';
    protected $guarded= ['id'];
}
