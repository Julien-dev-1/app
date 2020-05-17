<?php
use App\Projet;
use Illuminate\Database\Seeder;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Projet::truncate();
        for ($i=1; $i < 11; $i++) {
           Projet::create([
               "user_id" => $i,
               'title' => "Projet $i",
               "description" => "
               CSS is a language that describes the style of an HTML document.
               CSS describes how HTML elements should be displayed.
               This tutorial will teach you CSS from basic to advanced. $i
               ",
               "categorie" => "Environement",
               "localisation" => "Mahajanga",
               "projet_jeutons" => 120 * $i,
               "days" => 40 + $i,
               "path_img" => "2.jpg"
           ]);
        }
    }
}
