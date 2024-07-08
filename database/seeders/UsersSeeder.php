<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $demoUser = User::create([
            //'id' => Str::uuid()->toString(),
            'name'        => 'admin',
            'email'             => 'admin@admin.com',
            'password'          => Hash::make('admin'),
        ]);

        Category::create([
            'name' => 'Dịch vụ',
            'slug' => 'dich-vu'
        ]);
    }
}
