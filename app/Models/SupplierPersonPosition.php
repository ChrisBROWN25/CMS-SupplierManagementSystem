<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierPersonPosition extends Model
{
    use HasFactory;
    protected $fillable = ['position', 'contact_person_id'];
}