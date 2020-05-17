<?php

use Illuminate\Database\Seeder;
use App\apropos;

class AproposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apropos::truncate();
        for ($i=1; $i < 11; $i++)
        {
            Apropos::create([
                'projet_id' => $i,
                'idees' => "
                        Bootstrap 4 is the newest version of Bootstrap, which is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first websites.

                        Bootstrap 4 is completely free to download and use!
                        
                        Try it Yourself Examples
                        
                        This Bootstrap 4 tutorial contains hundreds of Bootstrap 4 examples.
                        
                        With our online editor, you can edit the code, and click on a button to view the result.
                        Responsive Bootstrap Page
                        Bootstrap 4 Example
                        <div class='jumbotron text-center'>
                        <h1>My First Bootstrap Page</h1>
                        <p>Resize this responsive page to see the effect!</p>
                        </div>
                ",
                'constatation' => "
                        Bootstrap 4 is the newest version of Bootstrap, which is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first websites.

                        Bootstrap 4 is completely free to download and use!
                        
                        Try it Yourself Examples
                        
                        This Bootstrap 4 tutorial contains hundreds of Bootstrap 4 examples.
                        
                        With our online editor, you can edit the code, and click on a button to view the result.
                        Responsive Bootstrap Page
                        Bootstrap 4 Example
                        <div class='jumbotron text-center'>
                        <h1>My First Bootstrap Page</h1>
                        <p>Resize this responsive page to see the effect!</p>
                        </div>
                ",
                'Solution' => "
                        Bootstrap 4 is the newest version of Bootstrap, which is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first websites.

                        Bootstrap 4 is completely free to download and use!
                        
                        Try it Yourself Examples
                        
                        This Bootstrap 4 tutorial contains hundreds of Bootstrap 4 examples.
                        
                        With our online editor, you can edit the code, and click on a button to view the result.
                        Responsive Bootstrap Page
                        Bootstrap 4 Example
                        <div class='jumbotron text-center'>
                        <h1>My First Bootstrap Page</h1>
                        <p>Resize this responsive page to see the effect!</p>
                        </div>
                ",
                'impacts_positif' => "
                        Bootstrap 4 is the newest version of Bootstrap, which is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first websites.

                        Bootstrap 4 is completely free to download and use!
                        
                        Try it Yourself Examples
                        
                        This Bootstrap 4 tutorial contains hundreds of Bootstrap 4 examples.
                        
                        With our online editor, you can edit the code, and click on a button to view the result.
                        Responsive Bootstrap Page
                        Bootstrap 4 Example
                        <div class='jumbotron text-center'>
                        <h1>My First Bootstrap Page</h1>
                        <p>Resize this responsive page to see the effect!</p>
                        </div>
                "
            ]);
        };
    }
}
