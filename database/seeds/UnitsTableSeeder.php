<?php
use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Unit::create([
            'name'      => 'Item'
        ]);
        $user->save();
    }
}