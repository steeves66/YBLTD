<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Article;
use App\Models\StatutLocation;
use Illuminate\Database\Seeder;
use Database\Seeders\TypeArticleTableSeeder;
use Database\Seeders\DureeLocationTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(TypeArticleTableSeeder::class);
        $this->call(StatutLocationTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(DureeLocationTableSeeder::class);
        Article::factory(100)->create();
        Client::factory(100)->create();
    }
}
