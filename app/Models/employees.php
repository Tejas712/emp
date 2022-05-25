<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    use HasFactory;
    protected $primaryKey = "emp_id";
    protected $fillable = ['emp_first_name', 'emp_last_name', 'emp_email','emp_phone', 'emp_com'];
    public $timestamps = false;
    const UPDATED_AT = null;
    
}   
