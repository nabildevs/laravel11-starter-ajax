<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function getBusinessIconAttribute($icon)
    {
        // return $icon ? Helper::url_file($icon) : asset('image/business_icon.png');
    }

    public function getBusinessLogoAttribute($logo)
    {
        // return $logo ? Helper::url_file($logo) : asset('image/business_logo.png');
    }
}
