<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'companyAddress',
        'facebookLink',
        'linkedInLink',
        'twitterLink',
        'instagramLink',
        'companyLogo',
        'companyName',
        'chairmanName',
        'chairmanImage',
        'chairmanMessage',
        'aboutImage',
        'aboutCompany',
    ];
}
