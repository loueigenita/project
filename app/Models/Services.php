<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Services
 * @package App\Models
 * @version October 1, 2021, 1:33 am UTC
 *
 * @property string $Contact_us
 * @property string $Email
 * @property string $Your_email
 */
class Services extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'services';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Contact_us',
        'Email',
        'Your_email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Contact_us' => 'string',
        'Email' => 'string',
        'Your_email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Contact_us' => 'required|string|max:255',
        'Email' => 'required|string|max:255',
        'Your_email' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
