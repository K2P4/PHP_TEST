<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Blog::truncate();
        Category::truncate();




        $frontend = Category::factory()->create(['name' => "frontend", 'slug' => 'frontend']);
        $backend = Category::factory()->create(['name' => "backend", 'slug' => 'backend']);

        $mgmg = User::factory()->create(['name' => "mg mg", 'username' => "mgmg"]);
        $agag = User::factory()->create(['name' => "ag ag", 'username' => "agag"]);
        Blog::factory(2)->create(['category_id' => $frontend->id, 'user_id' => $mgmg->id]);
        Blog::factory(2)->create(['category_id' => $backend->id, 'user_id' => $agag->id]);



        // Blog::create([
        //     'title'=>"frontend post",
        //     'intro'=>"this is intro",
        //     'slug'=>"frontend",
        //     'body'=>"This is frontend course This is frontend course This is frontend course",
        //     'category_id'=> $frontend->id,

        // ]);



        // Blog::create([
        //     'title'=>"backend post",
        //     'intro'=>"this is intro",
        //     'slug'=>"backend",
        //     'body'=>"This is backend course This is backend course This is backend course",
        //     'category_id'=> $backend->id,

        // ]);


    }
}
