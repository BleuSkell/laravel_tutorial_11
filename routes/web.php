<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
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
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
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

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});