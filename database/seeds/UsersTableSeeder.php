<?php
use App\Models\User;
use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        // Seed test admin
        $seededAdminEmail = 'admin@admin.com';

            $user = User::create([
                'name'      => $faker->lastName,
                'email'     => $seededAdminEmail,
                'password'  => \Illuminate\Support\Facades\Hash::make('password'),
                'created_at' => time(),
                'updated_at' => time(),
            ]);
            $user->save();

    }
}