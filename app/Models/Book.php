<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'authors',
        'genres',
        'is_available',
        'release_date',
        'cover',
        'description',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'release_date' => 'date',
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
                ->orWhere('authors', 'like', '%' . $filters['search_text'] . '%')
                ->orWhere('genres', 'like', '%' . $filters['search_text'] . '%')
                ->orWhere('authors', 'like', '%' . $filters['search_text'] . '%')
                ->orWhere('description', 'like', '%' . $filters['search_text'] . '%');
        }

        if (isset($filters['is_available'])) {
            $query->where('is_available', true);
        }

        if (($filters['date_from'] ?? false) || ($filters['date_to'] ?? false)) {
            $from = $filters['date_from'] ?? "2000-01-01";
            $to = $filters['date_to'] ?? date("Y-m-d");
            $query->whereBetween('release_date', [$from, $to]);
        }
    }

    /**
     * Get the ratings that the book has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userRatings()
    {
        return $this->hasMany(BookRating::class);
    }
}
