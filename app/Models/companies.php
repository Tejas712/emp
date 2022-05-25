<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    use HasFactory;
    protected $primaryKey = "com_id";
    protected $fillable = ['com_name', 'com_email', 'com_logo', 'com_website'];
    public $timestamps = false;
    const UPDATED_AT = null;
    
}
