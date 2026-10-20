<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use RuntimeException;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $email = env('ADMIN_EMAIL');
        $password = env('ADMIN_PASSWORD');

        if (!$email || !$password) {
            throw new RuntimeException(
                'Isi ADMIN_EMAIL dan ADMIN_PASSWORD di file .env terlebih dahulu.'
            );
        }

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => 'Admin Tasty Food',
                'password' => $password,
                'role' => 'admin',
            ]
        );
    }
}