<?php

namespace App\Trait;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait HasCreatorTraits
{
    public static function bootHasCreatorTraits()
    {
        static::creating(function ($model) {
            if (Auth::check() && !$model->creator_id) {
                $model->creator_id = Auth::id();
            }
        });
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id')->withDefault([
            'name' => 'System',
        ]);
    }
}
