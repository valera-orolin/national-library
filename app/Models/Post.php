<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'categories',
        'image',
        'text',
    ];

    /**
     * Apply the given filters to the query.
     *
     * @param   \Illuminate\Database\Eloquent\Builder  $query
     * @param   array  $filters
     * @return  void
     */
    public function scopeFilter($query, array $filters)
    {
        if ($filters['search_text'] ?? false) {
            $query->where('title', 'like', '%' . $filters['search_text'] . '%')
                ->orWhere('categories', 'like', '%' . $filters['search_text'] . '%')
                ->orWhere('text', 'like', '%' . $filters['search_text'] . '%');
        }

        if (($filters['date_from'] ?? false) || ($filters['date_to'] ?? false)) {
            $from = $filters['date_from'] ?? "2000-01-01";
            $to = $filters['date_to'] ?? date("Y-m-d");
            $query->whereBetween('created_at', [$from, $to]);
        }
    }
}
