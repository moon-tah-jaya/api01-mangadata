<?php

# database/seeds/UsersTableSeeder.php

use Illuminate\Support\Facades\Hash;
use Webpatser\Uuid\Uuid;
use App\Models\Security\Users;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        Users::create([
            'id' => Uuid::generate(),
            'username' => 'ahmed khan',
            'email' => 'ahmed.khan@gmail.com',
            'password' => Hash::make('ahmedkhan')
        ]);
    }
}