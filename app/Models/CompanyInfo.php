<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    const FACEBOOK = 'facebook';
    const PHONE = 'phone';
    const INSTAGRAM = 'instagram';
    const ADDRESS = 'address';

    const TYPE = [
        self::FACEBOOK,
        self::PHONE,
        self::INSTAGRAM,
        self::ADDRESS,
    ];

    use HasFactory;

    protected $table = 'len_company_info';

    protected $fillable = [
        'type',
        'icon',
        'value',
        'active',
    ];


}
