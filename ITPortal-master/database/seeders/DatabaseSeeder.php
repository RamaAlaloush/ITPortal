<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $this->call([
            UserSeeder::class,
            DepartmentSeeder::class,
            EmployeeSeeder::class,
            ManagerDepartmentsSeeder::class,
            RequestTypeSeeder::class,
            RequestSeeder::class,
            RequiredSeeder::class,
            CollageinformationSeeder::class,
            RequestListSeeder::class,
            DataSeeder::class,
            RequestLogSeeder::class,
            NotificationSeeder::class,
            PermissionsSeeder::class

        ]);
    }
}
