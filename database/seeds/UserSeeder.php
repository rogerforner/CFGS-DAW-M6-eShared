<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Configuració (.env).
        $name     = env('USER_ADMIN_NAME');
        $email    = env('USER_ADMIN_EMAIL');
        $password = env('USER_ADMIN_PASS');

        // Inserir usuaris.
        $adminUser = User::create([
            'name'     => $name,
            'email'    => $email,
            'password' => bcrypt($password),
        ]);

        $modUser = User::create([
            'name'     => 'moderator',
            'email'    => 'moderator@example.com',
            'password' => bcrypt('123456'),
        ]);

        $proUser = User::create([
            'name'     => 'pro',
            'email'    => 'pro@example.com',
            'password' => bcrypt('123456'),
        ]);

        $freeUser = User::create([
            'name'     => 'free',
            'email'    => 'free@example.com',
            'password' => bcrypt('123456'),
        ]);

        // Assignar rols.
        $adminUser->assignRole('admin');
        $modUser->assignRole('moderator');
        $proUser->assignRole('pro');
        $freeUser->assignRole('free');
    }
}
