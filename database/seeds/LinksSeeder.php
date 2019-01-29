<?php

use Illuminate\Database\Seeder;

class LinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [];
        $links[] = ["Laravel Docs", 'https://laravel.com/docs', "De laravel documentatie"];
        $links[] = ["Laracasts", 'https://laracasts.com/', "Laracasts, een verzameling handige video tutorials over Laravel"];
        $links[] = ["Laravel Cheatsheet", 'https://laravel.gen.tr/cheatsheet/', "Handige Laravel cheatsheet"];
        $links[] = ["Laravel Debug bar extensie", 'https://github.com/barryvdh/laravel-debugbar', "Handige extensie om debug informatie te zien"];
        $links[] = ["Laravel IDE Helper extensie","https://github.com/barryvdh/laravel-ide-helper","Handige extensie om extra code hulp en autocompletion te krijgen in je editor"];
        foreach ($links as $link) {
            App\Link::create([
                'title' => $link[0],
                'url' => $link[1],
                'description' => $link[2],
            ]);
        }
    }
}
