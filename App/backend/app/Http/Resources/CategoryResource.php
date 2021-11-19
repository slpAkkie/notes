<?php

namespace App\Http\Resources;

use App\Models\Category;

/**
 * @mixin Category
 */
final class CategoryResource extends CommonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'order' => $this->order,
        ];
    }
}
