<?php

namespace App\Models;

use App\Trait\HasCreatorTraits;
use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory, HasCreatorTraits;

    protected $guarded = [
        'id'
    ];

    public function getBusinessIconAttribute($icon)
    {
        return $icon ? Helper::url_file($icon) : asset('images/business_icon.png');
    }

    public function getBusinessLogoAttribute($logo)
    {
        return $logo ? Helper::url_file($logo) : asset('images/business_logo.png');
    }
}
