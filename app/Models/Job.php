<?php

namespace App\Models;

use Illuminate\Support\Arr;

class job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Web Developer',
                'salary' => '$50,000',
            ],
            [
                'id' => 2,
                'title' => 'Software Developer',
                'salary' => '$60,000',
            ],
            [
                'id' => 3,
                'title' => 'Software Engineer',
                'salary' => '$80,000',
            ]
        ];
    }
    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (! $job) {
            abort(404);
        }

        return $job;
    }
}
