<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            [
                [
                    'title' => 'Mon premier article',
                    'slug' => 'mon-premier-article',
                    'content' =>'Dans un monde où tout va de plus en plus vite, la gestion du temps est devenue une compétence essentielle. Que ce soit dans la vie professionnelle ou personnelle, savoir organiser ses journées permet d’être plus efficace, moins stressé et d’atteindre ses objectifs avec sérénité.',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'title' => 'Mon second article',
                    'slug' => 'mon-second-article',
                    'content' =>'La lecture est bien plus qu’un simple passe-temps. Elle nourrit l’esprit, stimule l’imagination et offre une évasion sans quitter son fauteuil. Dans un monde où les écrans sont omniprésents, ouvrir un livre permet de ralentir et de se reconnecter à l’essentiel.',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
                );
    }
}
