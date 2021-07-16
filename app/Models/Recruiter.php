<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{

    /**
     * table to store records.
     */
    protected $table = 'recruiter';


    /**
     * Primary key.
     */
    protected $primaryKey = 'id_recruiter';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_users_account',
        'id_company',
        'status'
    ];
}
