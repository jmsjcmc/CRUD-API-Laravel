<?php
namespace App\Utils;

class PaginationHelper
{
    public static function paginate($query, int $perPage = 15, int $page = 1, ?string $sortBy = null, string $sortOrder = 'asc'): LengthAwarePaginator{
        if ($sortBy) {
            $query->orderBy($sortBy, $sortOrder);
        }
        return $query->paginate($perPage,['*'], 'page', $page);
    }
}
