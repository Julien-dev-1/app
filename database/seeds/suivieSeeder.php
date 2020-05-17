<?php

use Illuminate\Database\Seeder;
use App\SuivieModel;

class suivieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SuivieModel::truncate();
        for ($i = 12; $i < 22; $i++) { 
            SuivieModel::create([
                "user_id" => 22-$i,
                "projet_id" => 22-$i,
                ]);
        }
    }
}
