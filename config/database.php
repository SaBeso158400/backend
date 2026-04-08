<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection
    |--------------------------------------------------------------------------
    */
    'default' => env('DB_CONNECTION', 'mongodb'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    */
    'connections' => [

        // ✅ MySQL (giữ lại nếu cần)
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
        ],

        // 🔥 MongoDB Atlas (QUAN TRỌNG NHẤT)
        'mongodb' => [
            'driver'   => 'mongodb',
            'dsn'      => env('MONGO_URL'),
            'database' => env('MONGO_DB_DATABASE', 'jewelryshop'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Table
    |--------------------------------------------------------------------------
    */
    'migrations' => [
        'table' => 'migrations',
    ],

    /*
    |--------------------------------------------------------------------------
    | Redis
    |--------------------------------------------------------------------------
    */
    'redis' => [
        'client' => env('REDIS_CLIENT', 'phpredis'),
        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => Str::slug(env('APP_NAME', 'laravel')).'-database-',
        ],
        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],
    ],

];