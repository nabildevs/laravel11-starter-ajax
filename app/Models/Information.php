<?php

namespace App\Models;

use App\Helper\Helper;
use App\Trait\HasCreatorTraits;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasCreatorTraits;

    protected $guarded = ['id'];

    public function scopeFilter($query, $filters)
    {
        $query->when($filters['search'] ?? false, function ($q) use ($filters) {
            $search = '%' . $filters['search'] . '%';
            $q->where(function ($q) use ($search) {
                $q->where('title', 'like', $search)
                    ->orWhere('short_description', 'like', $search)
                    ->orWhere('description', 'like', $search);
            })->orWhereHas('creator', function ($q) use ($search) {
                $q->where('name', 'like', $search);
            });
        })->when($filters['availability'] ?? false, function ($q) use ($filters) {
            $q->where('availability', $filters['availability']);
        })->when($filters['order'] ?? false, function ($q) use ($filters) {
            if ($filters['order'] === 'latest') {
                $q->orderBy('created_at', 'desc');
            } elseif ($filters['order'] === 'oldest') {
                $q->orderBy('created_at', 'asc');
            }
        });

        return $query;
    }

    public function getImageAttribute($image)
    {
        return Helper::url_file($image);
    }
}
