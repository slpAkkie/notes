<?php

namespace App\Http\Resources;

final class LogoutResource extends CommonResource
{
    public function toArray($request): array
    {
        return [
            'message' => 'Выход',
        ];
    }
}
