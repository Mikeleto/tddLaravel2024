<?php

namespace App\Filters;

use App\Rules\SortableColumn;
use App\Sortable;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserFilter extends QueryFilter
{
    protected $aliases = [
        'date' => 'created_at',
        'login' => 'last_login_at',
    ];

    public function filterRules(): array
    {
        return [
            'order' => [new SortableColumn(['title'])],
        ];
    }

    public function order($query, $value)
    {
        [$column, $direction] = Sortable::info($value);

        $query->orderBy($this->getColumnName($column), $direction);
    }
}
