<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Category;
use App\Models\Book;


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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'asep',
            'email' => 'asep@gmail.com',
            'password' => Hash::make('12345'),
            'role' => 'member'
        ]);
        Category::create([
            'category' => 'Fiksi',
        ]);
        Category::create([
            'category' => 'Non-fiksi',
        ]);
        Book::create([
            'title' => 'Si Anak Spesial',
            'author' => 'Tere Liye',
            'publisher' => 'Republika',
            'category_id' => '1',
            'isbn' => '9786025734441',
            'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut labore consectetur temporibus inventore non id? Corporis voluptatibus consectetur accusantium cumque provident officiis repellendus consequatur? Nam voluptas fugiat sapiente eligendi veritatis dignissimos, itaque at adipisci ad labore numquam natus vero suscipit repudiandae aperiam fuga praesentium qui totam quam amet sed consequatur voluptatem architecto. Soluta perferendis id nam veritatis expedita porro distinctio quis nihil, officiis ex aliquam odit tempore maiores dolorum voluptas enim laboriosam, aperiam molestias deserunt reiciendis? Exercitationem voluptatibus modi sed, eos hic dicta odit quasi? Laboriosam dolores laudantium voluptas ipsum tempora, repudiandae, itaque fugit labore vitae quae, cupiditate enim dolorum?',
            'cover_book' => '9786025734441_si-anak-spesi (1)_1674072113.jpg'
        ]);
        Book::create([
            'title' => 'Si Anak Badai',
            'author' => 'Tere Liye',
            'publisher' => 'Republika',
            'category_id' => '1',
            'isbn' => '9786025734441',
            'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut labore consectetur temporibus inventore non id? Corporis voluptatibus consectetur accusantium cumque provident officiis repellendus consequatur? Nam voluptas fugiat sapiente eligendi veritatis dignissimos, itaque at adipisci ad labore numquam natus vero suscipit repudiandae aperiam fuga praesentium qui totam quam amet sed consequatur voluptatem architecto. Soluta perferendis id nam veritatis expedita porro distinctio quis nihil, officiis ex aliquam odit tempore maiores dolorum voluptas enim laboriosam, aperiam molestias deserunt reiciendis? Exercitationem voluptatibus modi sed, eos hic dicta odit quasi? Laboriosam dolores laudantium voluptas ipsum tempora, repudiandae, itaque fugit labore vitae quae, cupiditate enim dolorum?',
            'cover_book' => '9786025734939_Si-Anak-Badai_1674071447.jpg'
        ]);
        Book::create([
            'title' => 'Si Anak Pintar',
            'author' => 'Tere Liye',
            'publisher' => 'Republika',
            'isbn' => '9786025734441',
            'category_id' => '2',
            'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut labore consectetur temporibus inventore non id? Corporis voluptatibus consectetur accusantium cumque provident officiis repellendus consequatur? Nam voluptas fugiat sapiente eligendi veritatis dignissimos, itaque at adipisci ad labore numquam natus vero suscipit repudiandae aperiam fuga praesentium qui totam quam amet sed consequatur voluptatem architecto. Soluta perferendis id nam veritatis expedita porro distinctio quis nihil, officiis ex aliquam odit tempore maiores dolorum voluptas enim laboriosam, aperiam molestias deserunt reiciendis? Exercitationem voluptatibus modi sed, eos hic dicta odit quasi? Laboriosam dolores laudantium voluptas ipsum tempora, repudiandae, itaque fugit labore vitae quae, cupiditate enim dolorum?',
            'cover_book' => '9786025734502_si-anak-pinta_1674072195.jpg'
        ]);
    }
}
