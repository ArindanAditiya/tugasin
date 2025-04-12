<?php

namespace Database\Seeders;

use App\Models\DailyTodo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User default
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $todos = [
            ['task' => 'Bangun tidur',      'start' => '05:00', 'end' => '05:10'],
            ['task' => 'Sholat Subuh',      'start' => '05:10', 'end' => '05:30'],
            ['task' => 'Olahraga pagi',     'start' => '05:30', 'end' => '06:00'],
            ['task' => 'Sarapan',           'start' => '06:00', 'end' => '06:30'],
            ['task' => 'Mandi',             'start' => '06:30', 'end' => '06:50'],
            ['task' => 'Belajar coding',    'start' => '07:00', 'end' => '10:00'],
            ['task' => 'Sholat Dzuhur',     'start' => '12:00', 'end' => '12:20'],
            ['task' => 'Makan siang',       'start' => '12:20', 'end' => '13:00'],
            ['task' => 'Baca buku',         'start' => '13:00', 'end' => '14:00'],
            ['task' => 'Sholat Ashar',      'start' => '15:30', 'end' => '15:50'],
            ['task' => 'Ngoding project',   'start' => '16:00', 'end' => '17:30'],
            ['task' => 'Sholat Maghrib',    'start' => '18:15', 'end' => '18:30'],
            ['task' => 'Makan malam',       'start' => '18:30', 'end' => '19:00'],
            ['task' => 'Sholat Isya',       'start' => '19:30', 'end' => '19:50'],
            ['task' => 'Istirahat',         'start' => '20:00', 'end' => '22:00'],
        ];

        foreach ($todos as $todo) {
            DailyTodo::create([
                'task' => $todo['task'],
                'start' => $todo['start'],
                'end' => $todo['end'],
                'status' => false,
            ]);
        }
    }
}
