<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'cpf' => '07108376660',
            'name' => 'Habner Silva',
            'phone' => '35988148778',
            'birth' => '1985-01-29',
            'gender' => 'M',
            'notes' => '',
            'email' => 'habner@aptec.com.br',
            'password' => env('PASSWORD_HASH') ? bcrypt('123456') : '123456'
        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
