<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat Sample Penulis
        $author1 = Author::create(['name'=>'lab 1']);
        $author2 = Author::create(['name'=>'lab 2']);
        $author3 = Author::create(['name'=>'lab 3']);

        // membuat Sample Book
        $book3 = Book::create(['barang'=>'papan tulis','status'=>'lama','kategori'=>'belajar','jumlah_unit'=>'1',
        'author_id'=> $author1->id,]);
        $book2 = Book::create(['barang'=>'komputer','status'=>'rusak','kategori'=>'elektronik','jumlah_unit'=>'5',
        'author_id'=> $author2->id,]);
        $book3 = Book::create(['barang'=>'meja','status'=>'bagus','kategori'=>'belajar','jumlah_unit'=>'21',
        'author_id'=> $author3->id,]);

    }
}
