<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    /**
     * table to store records.
     */
    protected $table = 'company';


    /**
     * Primary key.
     */
    protected $primaryKey = 'id_company';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_owner',
        'nama_company',
        'departement_company',
        'email',
        'primary_telphone',
        'secondary_telphone',
        'address',
        'city',
        'state',
        'postal_code',
        'location',
        'social_media',
        'website'
    ];
}
