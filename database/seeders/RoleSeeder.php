<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin',
            'slug' => Str::slug('Admin'),
        ]);

        Role::create([
            'name' => 'Editor',
            'slug' => Str::slug('Admin'),
        ]);

        Role::create([
            'name' => 'Staff',
            'slug' => Str::slug('Admin'),
        ]);

        Role::create([
            'name' => 'Teacher',
            'slug' => Str::slug('Admin'),
        ]);
    }
}
