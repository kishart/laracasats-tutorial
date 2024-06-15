<?php
namespace App\Models;

use Illuminate\Support\Arr;
class Job{
    public static function all():array{
        return [
            ['id' => '1', 'title' => 'PHP Developer', 'salary' => '21,000'],
            ['id' => '2', 'title' => 'Python Developer', 'salary' => '122142'],
            ['id' => '3', 'title' => 'Java Developer', 'salary' => '123123'],
        ];
    }
    public static function find(int $id):array
    {
       $job = Arr::first(static::all(), fn($job) => $job['id']== $id);
       if(! $job){
           abort (404);
       }
    }
}