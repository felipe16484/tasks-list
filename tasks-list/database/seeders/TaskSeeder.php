<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task1 = new Task;
        $task1->user_id = 1;
        $task1->title = 'Realizar prueba técnica';
        $task1->description = 'Desarrollar un sistema de gestión de tareas utilizando el framework Laravel';
        $task1->expiration_date = '2023-11-09';
        $task1->status = 'En progreso';
        $task1->save();

        Task::factory(50)->create();

    }
}
