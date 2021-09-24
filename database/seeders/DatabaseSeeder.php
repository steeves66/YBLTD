<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Client;
use App\Models\Article;
use App\Models\StatutLocation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        Article::factory(10)->create();
        Client::factory(10)->create();
        User::factory(10)->create();

        User::find(1)->roles()->attach(1);
        User::find(2)->roles()->attach(2);
        User::find(3)->roles()->attach(3);
        User::find(4)->roles()->attach(4);
        /*
        Ou

        $user=User::find(1);
        $role=Role::find(1);
        DB::table('user_role')->insert([
            "user_id"=>$user,
            "role_id"=>$role
        ]);
        */
    }
}
