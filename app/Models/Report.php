<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    /**
     * The attributes that should be shown in lists.
     *
     * @var array
     */
    protected $listable = [
        'id',
        'report_code',
        'status_id',
        'type_id',
        'user_id',
        'created_at',
        'updated_at',
    ];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'report_code',
        'status_id',
        'type_id',
        'user_id',
        'created_at',
        'updated_at',
    ];
}
