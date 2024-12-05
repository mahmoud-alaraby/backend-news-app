<?php

namespace App\Enums;

enum StatusEnum: string
{
    case ACTIVE = 'active';
    case NOT_ACTIVE = 'not_active';
    case DRAFT = 'draft';

    public function name(): string
    {
        return match ($this) {
            self::ACTIVE => trans('enums/status.posts.active'),
            self::NOT_ACTIVE => trans('enums/status.posts.not_active'),
            self::DRAFT => trans('enums/status.posts.draft'),
        };
    }
}
