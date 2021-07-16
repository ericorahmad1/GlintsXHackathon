<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_type extends Model
{
    use HasFactory;

    /**
     * table to store records.
     */
    protected $table = 'user_type';


    /**
     * Primary key.
     */
    protected $primaryKey = 'id_user_type';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type_name'
    ];
}
