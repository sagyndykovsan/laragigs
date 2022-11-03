<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters) {
        if ($filters['tag'] ?? false ) {
            return $query->where('tags', 'like', '%' . $filters['tag'] . '%');
        }

        if ($filters['search'] ?? false ) {
            return $query->where('tags', 'like', '%' . $filters['search'] . '%')
            ->orWhere('title', 'like', '%' . $filters['search'] . '%')
            ->orWhere('description', 'like', '%' . $filters['search'] . '%');
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = ['title', 'user_id', 'logo', 'company', 'location', 'email', 'website', 'tags', 'description'];
}
