<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    /**
     * table to store records.
     */
    protected $table = 'jobs';


    /**
     * Primary key.
     */
    protected $primaryKey = 'id_job';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_company',
        'job_title',
        'salary',
        'yoe',
        'education_level',
        'carrer_level',
        'category',
        'job_location',
        'job_start_date',
        'job_end_date',
        'job_type'
    ];
}
