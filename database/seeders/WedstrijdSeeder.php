<?php

namespace Database\Seeders;



use App\Models\Wedstrijd;
use Illuminate\Database\Seeder;

class WedstrijdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *

     * @return void
     */
    public function run()
    {
        $wedstrijd = new Wedstrijd();
        $wedstrijd-> title = "4s schoolvoetbal vs fc Breda";
        $wedstrijd-> team1 =  1;
        $wedstrijd-> team2 =  2;
        $wedstrijd-> score_team1 =  2;
        $wedstrijd-> score_team2 =  1;
        $wedstrijd-> status = "Fc Breda heeft gewonen";
        $wedstrijd -> save();

        $wedstrijd = new Wedstrijd();
        $wedstrijd-> title = "4s schoolvoetbal vs fc Breda";
        $wedstrijd-> team1 =  1;
        $wedstrijd-> team2 =  2;
        $wedstrijd-> score_team1 =  1;
        $wedstrijd-> score_team2 =  2;
        $wedstrijd-> status = "4s schoolvoetbal heeft gewonen";
        $wedstrijd -> save();


    }
}