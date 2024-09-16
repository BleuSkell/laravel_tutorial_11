<?php

namespace App\Models;
use Illuminate\Support\Arr;

Class Job {
    public static function all(): array
    {
        return [
            [   
                'id' => 1
                ,'title' => 'Director'
                ,'salary' => '$30,000'
            ],
            [
                'id' => 2
                ,'title' => 'Conductor of the poop train'
                ,'salary' => '$10'
            ],
            [
                'id' => 3
                ,'title' => 'Child'
                ,'salary' => '$0'
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