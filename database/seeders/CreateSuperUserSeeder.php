<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CreateSuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superUser = User::create([
            'email' => 'adminios@gmail.com',
            'name' => 'Admin',
            'password' => Hash::make('Iuehk3jsk'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        Role::create([
            'name' => 'super-user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $superUser->assignRole('super-user');
    }
}
