<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Product 1',
            'slug' => 'product-1',
            'price' => '1000'
        ]);

        Product::create([
            'name' => 'Product 2',
            'slug' => 'product-2',
            'price' => '2000'
        ]);

        Product::create([
            'name' => 'Product 3',
            'slug' => 'product-3',
            'price' => '3000'
        ]);

        Product::create([
            'name' => 'Product 4',
            'slug' => 'product-4',
            'price' => '4000'
        ]);

        Product::create([
            'name' => 'Product 5',
            'slug' => 'product-5',
            'price' => '5000'
        ]);

        Review::create([
            'id' => 1,
            'product_id' => 2,
            'rating' => 5
        ]);

        Review::create([
            'id' => 2,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 3,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 4,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 5,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 6,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 7,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 8,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 9,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 10,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 11,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 12,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 13,
            'product_id' => 3,
            'rating' => 5
        ]);

        Review::create([
            'id' => 14,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 15,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 16,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 17,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 18,
            'product_id' => 1,
            'rating' => 1
        ]);

        Review::create([
            'id' => 19,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 20,
            'product_id' => 1,
            'rating' => 4
        ]);

        Review::create([
            'id' => 21,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 22,
            'product_id' => 1,
            'rating' => 4
        ]);

        Review::create([
            'id' => 23,
            'product_id' => 3,
            'rating' => 5
        ]);

        Review::create([
            'id' => 24,
            'product_id' => 1,
            'rating' => 4
        ]);

        Review::create([
            'id' => 25,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 26,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 27,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 28,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 29,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 30,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 31,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 32,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 33,
            'product_id' => 5,
            'rating' => 1
        ]);

        Review::create([
            'id' => 34,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 35,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 36,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 37,
            'product_id' => 5,
            'rating' => 1
        ]);

        Review::create([
            'id' => 38,
            'product_id' => 1,
            'rating' => 2
        ]);

        Review::create([
            'id' => 39,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 40,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 41,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 42,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 43,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 44,
            'product_id' => 3,
            'rating' => 5
        ]);

        Review::create([
            'id' => 45,
            'product_id' => 1,
            'rating' => 4
        ]);

        Review::create([
            'id' => 46,
            'product_id' => 5,
            'rating' => 1
        ]);

        Review::create([
            'id' => 47,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 48,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 49,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 50,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 51,
            'product_id' => 1,
            'rating' => 2
        ]);

        Review::create([
            'id' => 52,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 53,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 54,
            'product_id' => 5,
            'rating' => 2
        ]);

        Review::create([
            'id' => 55,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 56,
            'product_id' => 1,
            'rating' => 1
        ]);

        Review::create([
            'id' => 57,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 58,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 59,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 60,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 61,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 62,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 63,
            'product_id' => 2,
            'rating' => 5
        ]);

        Review::create([
            'id' => 64,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 65,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 66,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 67,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 68,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 69,
            'product_id' => 2,
            'rating' => 5
        ]);

        Review::create([
            'id' => 70,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 71,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 72,
            'product_id' => 5,
            'rating' => 2
        ]);

        Review::create([
            'id' => 73,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 74,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 75,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 76,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 77,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 78,
            'product_id' => 3,
            'rating' => 5
        ]);

        Review::create([
            'id' => 79,
            'product_id' => 3,
            'rating' => 5
        ]);

        Review::create([
            'id' => 80,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 81,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 82,
            'product_id' => 5,
            'rating' => 1
        ]);

        Review::create([
            'id' => 83,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 84,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 85,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 86,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 87,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 88,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 89,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 90,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 91,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 92,
            'product_id' => 1,
            'rating' => 1
        ]);

        Review::create([
            'id' => 93,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 94,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 95,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 96,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 97,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 98,
            'product_id' => 5,
            'rating' => 3
        ]);

        Review::create([
            'id' => 99,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 100,
            'product_id' => 5,
            'rating' => 2
        ]);

        Review::create([
            'id' => 101,
            'product_id' => 5,
            'rating' => 2
        ]);

        Review::create([
            'id' => 102,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 103,
            'product_id' => 1,
            'rating' => 5
        ]);

        Review::create([
            'id' => 104,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 105,
            'product_id' => 1,
            'rating' => 4
        ]);

        Review::create([
            'id' => 106,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 107,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 108,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 109,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 110,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 111,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 112,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 113,
            'product_id' => 1,
            'rating' => 1
        ]);

        Review::create([
            'id' => 114,
            'product_id' => 2,
            'rating' => 5
        ]);

        Review::create([
            'id' => 115,
            'product_id' => 2,
            'rating' => 5
        ]);

        Review::create([
            'id' => 116,
            'product_id' => 1,
            'rating' => 5
        ]);

        Review::create([
            'id' => 117,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 118,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 119,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 120,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 121,
            'product_id' => 5,
            'rating' => 2
        ]);

        Review::create([
            'id' => 122,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 123,
            'product_id' => 5,
            'rating' => 4
        ]);

        Review::create([
            'id' => 124,
            'product_id' => 5,
            'rating' => 3
        ]);

        Review::create([
            'id' => 125,
            'product_id' => 3,
            'rating' => 5
        ]);

        Review::create([
            'id' => 126,
            'product_id' => 1,
            'rating' => 4
        ]);

        Review::create([
            'id' => 127,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 128,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 129,
            'product_id' => 1,
            'rating' => 1
        ]);

        Review::create([
            'id' => 130,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 131,
            'product_id' => 1,
            'rating' => 4
        ]);

        Review::create([
            'id' => 132,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 133,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 134,
            'product_id' => 1,
            'rating' => 5
        ]);

        Review::create([
            'id' => 135,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 136,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 137,
            'product_id' => 5,
            'rating' => 3
        ]);

        Review::create([
            'id' => 138,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 139,
            'product_id' => 5,
            'rating' => 3
        ]);

        Review::create([
            'id' => 140,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 141,
            'product_id' => 5,
            'rating' => 3
        ]);

        Review::create([
            'id' => 142,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 143,
            'product_id' => 1,
            'rating' => 4
        ]);

        Review::create([
            'id' => 144,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 145,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 146,
            'product_id' => 1,
            'rating' => 4
        ]);

        Review::create([
            'id' => 147,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 148,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 149,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 150,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 151,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 152,
            'product_id' => 5,
            'rating' => 4
        ]);

        Review::create([
            'id' => 153,
            'product_id' => 1,
            'rating' => 2
        ]);

        Review::create([
            'id' => 154,
            'product_id' => 1,
            'rating' => 2
        ]);

        Review::create([
            'id' => 155,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 156,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 157,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 158,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 159,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 160,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 161,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 162,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 163,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 164,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 165,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 166,
            'product_id' => 5,
            'rating' => 4
        ]);

        Review::create([
            'id' => 167,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 168,
            'product_id' => 5,
            'rating' => 2
        ]);

        Review::create([
            'id' => 169,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 170,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 171,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 172,
            'product_id' => 5,
            'rating' => 2
        ]);

        Review::create([
            'id' => 173,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 174,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 175,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 176,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 177,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 178,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 179,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 180,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 181,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 182,
            'product_id' => 3,
            'rating' => 5
        ]);

        Review::create([
            'id' => 183,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 184,
            'product_id' => 3,
            'rating' => 5
        ]);

        Review::create([
            'id' => 185,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 186,
            'product_id' => 5,
            'rating' => 2
        ]);

        Review::create([
            'id' => 187,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 188,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 189,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 190,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 191,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 192,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 193,
            'product_id' => 5,
            'rating' => 2
        ]);

        Review::create([
            'id' => 194,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 195,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 196,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 197,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 198,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 199,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 200,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 201,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 202,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 203,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 204,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 205,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 206,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 207,
            'product_id' => 5,
            'rating' => 4
        ]);

        Review::create([
            'id' => 208,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 209,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 210,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 211,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 212,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 213,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 214,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 215,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 216,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 217,
            'product_id' => 2,
            'rating' => 5
        ]);

        Review::create([
            'id' => 218,
            'product_id' => 2,
            'rating' => 5
        ]);

        Review::create([
            'id' => 219,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 220,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 221,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 222,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 223,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 224,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 225,
            'product_id' => 2,
            'rating' => 5
        ]);

        Review::create([
            'id' => 226,
            'product_id' => 1,
            'rating' => 1
        ]);

        Review::create([
            'id' => 227,
            'product_id' => 3,
            'rating' => 5
        ]);

        Review::create([
            'id' => 228,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 229,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 230,
            'product_id' => 1,
            'rating' => 4
        ]);

        Review::create([
            'id' => 231,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 232,
            'product_id' => 2,
            'rating' => 5
        ]);

        Review::create([
            'id' => 233,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 234,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 235,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 236,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 237,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 238,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 239,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 240,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 241,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 242,
            'product_id' => 1,
            'rating' => 1
        ]);

        Review::create([
            'id' => 243,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 244,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 245,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 246,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 247,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 248,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 249,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 250,
            'product_id' => 2,
            'rating' => 5
        ]);

        Review::create([
            'id' => 251,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 252,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 253,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 254,
            'product_id' => 1,
            'rating' => 2
        ]);

        Review::create([
            'id' => 255,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 256,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 257,
            'product_id' => 1,
            'rating' => 2
        ]);

        Review::create([
            'id' => 258,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 259,
            'product_id' => 5,
            'rating' => 2
        ]);

        Review::create([
            'id' => 260,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 261,
            'product_id' => 5,
            'rating' => 3
        ]);

        Review::create([
            'id' => 262,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 263,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 264,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 265,
            'product_id' => 1,
            'rating' => 2
        ]);

        Review::create([
            'id' => 266,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 267,
            'product_id' => 1,
            'rating' => 2
        ]);

        Review::create([
            'id' => 268,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 269,
            'product_id' => 5,
            'rating' => 2
        ]);

        Review::create([
            'id' => 270,
            'product_id' => 5,
            'rating' => 5
        ]);

        Review::create([
            'id' => 271,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 272,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 273,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 274,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 275,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 276,
            'product_id' => 3,
            'rating' => 5
        ]);

        Review::create([
            'id' => 277,
            'product_id' => 5,
            'rating' => 1
        ]);

        Review::create([
            'id' => 278,
            'product_id' => 1,
            'rating' => 4
        ]);

        Review::create([
            'id' => 279,
            'product_id' => 1,
            'rating' => 2
        ]);

        Review::create([
            'id' => 280,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 281,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 282,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 283,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 284,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 285,
            'product_id' => 1,
            'rating' => 2
        ]);

        Review::create([
            'id' => 286,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 287,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 288,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 289,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 290,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 291,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 292,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 293,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 294,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 295,
            'product_id' => 5,
            'rating' => 3
        ]);

        Review::create([
            'id' => 296,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 297,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 298,
            'product_id' => 1,
            'rating' => 5
        ]);

        Review::create([
            'id' => 299,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 300,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 301,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 302,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 303,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 304,
            'product_id' => 1,
            'rating' => 1
        ]);

        Review::create([
            'id' => 305,
            'product_id' => 5,
            'rating' => 1
        ]);

        Review::create([
            'id' => 306,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 307,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 308,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 309,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 310,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 311,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 312,
            'product_id' => 5,
            'rating' => 5
        ]);

        Review::create([
            'id' => 313,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 314,
            'product_id' => 5,
            'rating' => 5
        ]);

        Review::create([
            'id' => 315,
            'product_id' => 5,
            'rating' => 2
        ]);

        Review::create([
            'id' => 316,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 317,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 318,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 319,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 320,
            'product_id' => 5,
            'rating' => 3
        ]);

        Review::create([
            'id' => 321,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 322,
            'product_id' => 5,
            'rating' => 2
        ]);

        Review::create([
            'id' => 323,
            'product_id' => 3,
            'rating' => 5
        ]);

        Review::create([
            'id' => 324,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 325,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 326,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 327,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 328,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 329,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 330,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 331,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 332,
            'product_id' => 1,
            'rating' => 4
        ]);

        Review::create([
            'id' => 333,
            'product_id' => 1,
            'rating' => 2
        ]);

        Review::create([
            'id' => 334,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 335,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 336,
            'product_id' => 5,
            'rating' => 4
        ]);

        Review::create([
            'id' => 337,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 338,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 339,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 340,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 341,
            'product_id' => 5,
            'rating' => 2
        ]);

        Review::create([
            'id' => 342,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 343,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 344,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 345,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 346,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 347,
            'product_id' => 1,
            'rating' => 2
        ]);

        Review::create([
            'id' => 348,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 349,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 350,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 351,
            'product_id' => 2,
            'rating' => 5
        ]);

        Review::create([
            'id' => 352,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 353,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 354,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 355,
            'product_id' => 5,
            'rating' => 2
        ]);

        Review::create([
            'id' => 356,
            'product_id' => 5,
            'rating' => 3
        ]);

        Review::create([
            'id' => 357,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 358,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 359,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 360,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 361,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 362,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 363,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 364,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 365,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 366,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 367,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 368,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 369,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 370,
            'product_id' => 5,
            'rating' => 4
        ]);

        Review::create([
            'id' => 371,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 372,
            'product_id' => 2,
            'rating' => 5
        ]);

        Review::create([
            'id' => 373,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 374,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 375,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 376,
            'product_id' => 5,
            'rating' => 3
        ]);

        Review::create([
            'id' => 377,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 378,
            'product_id' => 1,
            'rating' => 4
        ]);

        Review::create([
            'id' => 379,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 380,
            'product_id' => 5,
            'rating' => 4
        ]);

        Review::create([
            'id' => 381,
            'product_id' => 1,
            'rating' => 4
        ]);

        Review::create([
            'id' => 382,
            'product_id' => 1,
            'rating' => 2
        ]);

        Review::create([
            'id' => 383,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 384,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 385,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 386,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 387,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 388,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 389,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 390,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 391,
            'product_id' => 3,
            'rating' => 5
        ]);

        Review::create([
            'id' => 392,
            'product_id' => 2,
            'rating' => 5
        ]);

        Review::create([
            'id' => 393,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 394,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 395,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 396,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 397,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 398,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 399,
            'product_id' => 1,
            'rating' => 5
        ]);

        Review::create([
            'id' => 400,
            'product_id' => 5,
            'rating' => 2
        ]);

        Review::create([
            'id' => 401,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 402,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 403,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 404,
            'product_id' => 1,
            'rating' => 1
        ]);

        Review::create([
            'id' => 405,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 406,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 407,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 408,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 409,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 410,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 411,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 412,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 413,
            'product_id' => 5,
            'rating' => 4
        ]);

        Review::create([
            'id' => 414,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 415,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 416,
            'product_id' => 5,
            'rating' => 5
        ]);

        Review::create([
            'id' => 417,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 418,
            'product_id' => 5,
            'rating' => 3
        ]);

        Review::create([
            'id' => 419,
            'product_id' => 5,
            'rating' => 1
        ]);

        Review::create([
            'id' => 420,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 421,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 422,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 423,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 424,
            'product_id' => 5,
            'rating' => 4
        ]);

        Review::create([
            'id' => 425,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 426,
            'product_id' => 5,
            'rating' => 3
        ]);

        Review::create([
            'id' => 427,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 428,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 429,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 430,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 431,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 432,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 433,
            'product_id' => 2,
            'rating' => 5
        ]);

        Review::create([
            'id' => 434,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 435,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 436,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 437,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 438,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 439,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 440,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 441,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 442,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 443,
            'product_id' => 1,
            'rating' => 5
        ]);

        Review::create([
            'id' => 444,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 445,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 446,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 447,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 448,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 449,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 450,
            'product_id' => 3,
            'rating' => 1
        ]);

        Review::create([
            'id' => 451,
            'product_id' => 1,
            'rating' => 5
        ]);

        Review::create([
            'id' => 452,
            'product_id' => 1,
            'rating' => 3
        ]);

        Review::create([
            'id' => 453,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 454,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 455,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 456,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 457,
            'product_id' => 5,
            'rating' => 3
        ]);

        Review::create([
            'id' => 458,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 459,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 460,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 461,
            'product_id' => 2,
            'rating' => 5
        ]);

        Review::create([
            'id' => 462,
            'product_id' => 3,
            'rating' => 4
        ]);

        Review::create([
            'id' => 463,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 464,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 465,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 466,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 467,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 468,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 469,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 470,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 471,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 472,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 473,
            'product_id' => 5,
            'rating' => 5
        ]);

        Review::create([
            'id' => 474,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 475,
            'product_id' => 3,
            'rating' => 2
        ]);

        Review::create([
            'id' => 476,
            'product_id' => 5,
            'rating' => 5
        ]);

        Review::create([
            'id' => 477,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 478,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 479,
            'product_id' => 3,
            'rating' => 5
        ]);

        Review::create([
            'id' => 480,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 481,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 482,
            'product_id' => 4,
            'rating' => 1
        ]);

        Review::create([
            'id' => 483,
            'product_id' => 3,
            'rating' => 5
        ]);

        Review::create([
            'id' => 484,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 485,
            'product_id' => 4,
            'rating' => 3
        ]);

        Review::create([
            'id' => 486,
            'product_id' => 5,
            'rating' => 4
        ]);

        Review::create([
            'id' => 487,
            'product_id' => 2,
            'rating' => 4
        ]);

        Review::create([
            'id' => 488,
            'product_id' => 1,
            'rating' => 5
        ]);

        Review::create([
            'id' => 489,
            'product_id' => 1,
            'rating' => 1
        ]);

        Review::create([
            'id' => 490,
            'product_id' => 2,
            'rating' => 3
        ]);

        Review::create([
            'id' => 491,
            'product_id' => 2,
            'rating' => 5
        ]);

        Review::create([
            'id' => 492,
            'product_id' => 4,
            'rating' => 5
        ]);

        Review::create([
            'id' => 493,
            'product_id' => 2,
            'rating' => 2
        ]);

        Review::create([
            'id' => 494,
            'product_id' => 2,
            'rating' => 1
        ]);

        Review::create([
            'id' => 495,
            'product_id' => 4,
            'rating' => 2
        ]);

        Review::create([
            'id' => 496,
            'product_id' => 4,
            'rating' => 4
        ]);

        Review::create([
            'id' => 497,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 498,
            'product_id' => 3,
            'rating' => 3
        ]);

        Review::create([
            'id' => 499,
            'product_id' => 1,
            'rating' => 2
        ]);

        Review::create([
            'id' => 500,
            'product_id' => 2,
            'rating' => 2
        ]);
    }
}
