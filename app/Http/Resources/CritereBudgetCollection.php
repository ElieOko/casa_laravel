<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CritereBudgetCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public static $wrap = "critere_budgets";
    public function toArray(Request $request)
    {
        return $this->collection;
    }
}
