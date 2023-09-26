<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use App\Models\Event;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(BookSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(PostSeeder::class);

        $this->call(CommentSeeder::class);
    }
}
