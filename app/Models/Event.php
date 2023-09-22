<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'date',
        'place',
        'image',
        'description',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date' => 'datetime',
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
                ->orWhere('place', 'like', '%' . $filters['search_text'] . '%')
                ->orWhere('description', 'like', '%' . $filters['search_text'] . '%');
        }

        if (($filters['date_from'] ?? false) || ($filters['date_to'] ?? false)) {
            $from = $filters['date_from'] ?? "2000-01-01";
            $to = $filters['date_to'] ?? date("Y-m-d");
            $query->whereBetween('date', [$from, $to]);
        }
    }
}
