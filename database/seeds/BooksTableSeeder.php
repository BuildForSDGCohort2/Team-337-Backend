<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Book::create([
            'title' => 'Unlocking Android',
            'author' => 'W. Frank Ableson',
            'number_of_pages' => '556',
            'type' => 'science',
            'level' => 'basic',
            'description' => "Unlocking Android: A Developer's Guide provides concise, hands-on instruction for the Android operating system and development tools. This book teaches important architectural concepts in a straightforward writing style and builds on this with practical and useful examples throughout.",
            'thumbnail' => 'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg',
            'isbn' => '1933988673',
            'price' =>'$14',
            'url' => ''
            
        ]);
        Book::create([
            'title' => 'Android in Action, Second Edition',
            'author' => 'W. Frank Ableson',
            'number_of_pages' => '556',
            'type' => 'mathematics',
            'level' => 'basic',
            'description' => 'description',
            'thumbnail' => 'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson2.jpg',
            'isbn' => '1935182722',
            'price' =>'$14',
            'url' => ''
            
        ]);
        Book::create([
            'title' => 'Specification by Example',
            'author' => 'W. Frank Ableson',
            'number_of_pages' => '556',
            'type' => 'science',
            'level' => 'basic',
            'description' => "Unlocking Android: A Developer's Guide provides concise, hands-on instruction for the Android operating system and development tools. This book teaches important architectural concepts in a straightforward writing style and builds on this with practical and useful examples throughout.",
            'thumbnail' => 'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/adzic.jpg',
            'isbn' => 'Gojko Adzic',
            'price' =>'$14',
            'url' => ''
            
        ]);
        Book::create([
            'title' => 'Flex 3 in Action',
            'author' => 'Tariq Ahmed with Jon Hirschi',
            'number_of_pages' => '556',
            'type' => 'science',
            'level' => 'basic',
            'description' => "Unlocking Android: A Developer's Guide provides concise, hands-on instruction for the Android operating system and development tools. This book teaches important architectural concepts in a straightforward writing style and builds on this with practical and useful examples throughout.",
            'thumbnail' => 'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ahmed.jpg',
            'isbn' => '1933988673',
            'price' =>'$14',
            'url' => ''
            
        ]);
    }
}
