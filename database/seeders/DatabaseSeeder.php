<?php

namespace Database\Seeders;

use App\Http\Controllers\CategoryController;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Detail;
use App\Models\Category;

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
        Book::create([
            'category_id' => 1,
            'title' => 'Fiction',
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'Fiction 2',
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'Fiction 3',
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'Fiction 4',
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'Fiction 5',
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'Fiction 6',
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'Fiction 7',
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'Fiction 8',
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'Fiction 9',
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'Fiction 10',
        ]);

        Book::create([
            'category_id' => 1,
            'title' => 'Fiction 11',
        ]);

        Category::create([
            'category' => 'Fiction',
        ]);

        Category::create([
            'category' => 'Science',
        ]);

        Category::create([
            'category' => 'Computer',
        ]);

        Detail::create([
            'book_id' => 1,
            'author' => 'Jhon doe',
            'publisher' => 'Gramdedi',
            'year' => 2021,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to' 
        ]);

        Detail::create([
            'book_id' => 2,
            'author' => 'Dedi Jhon',
            'publisher' => 'Gramdedi',
            'year' => 2021,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to' 
        ]);

        Detail::create([
            'book_id' => 3,
            'author' => 'Author',
            'publisher' => 'Gramdedi',
            'year' => 2021,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to' 
        ]);

        Detail::create([
            'book_id' => 4,
            'author' => 'Fathde',
            'publisher' => 'Gramdedi',
            'year' => 2021,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to' 
        ]);

        Detail::create([
            'book_id' => 5,
            'author' => 'Yahyad',
            'publisher' => 'Gramdedi',
            'year' => 2021,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to' 
        ]);

        Detail::create([
            'book_id' => 6,
            'author' => 'Jhon doe',
            'publisher' => 'Gramdedi',
            'year' => 2021,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to' 
        ]);

        Detail::create([
            'book_id' => 7,
            'author' => 'Dedi Jhon',
            'publisher' => 'Gramdedi',
            'year' => 2021,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to' 
        ]);

        Detail::create([
            'book_id' => 8,
            'author' => 'Author',
            'publisher' => 'Gramdedi',
            'year' => 2021,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to' 
        ]);

        Detail::create([
            'book_id' => 9,
            'author' => 'Fathde',
            'publisher' => 'Gramdedi',
            'year' => 2021,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to' 
        ]);

        Detail::create([
            'book_id' => 10,
            'author' => 'Yahyad',
            'publisher' => 'Gramdedi',
            'year' => 2021,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to' 
        ]);
        
        Detail::create([
            'book_id' => 11,
            'author' => 'Yahyad',
            'publisher' => 'Gramdedi',
            'year' => 2021,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to' 
        ]);
        
    }
}
