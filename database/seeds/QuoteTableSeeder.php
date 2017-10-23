<?php

# database/seeds/QuoteTableSeeder.php

use App\Models\Quote\Quotes;
use Illuminate\Database\Seeder;

class QuoteTableSeeder extends Seeder
{
    public function run()
    {
        Quotes::create([
            'text' => 'Success is going from failure to failure without losing your enthusiasm',
            'author' => 'Winston Churchill',
            'background' => '1.jpg'
        ]);

        Quotes::create([
            'text' => 'Dream big and dare to fail',
            'author' => 'Norman Vaughan',
            'background' => '2.jpg'
        ]);

        Quotes::create([
            'text' => 'It does not matter how slowly you go as long as you do not stop',
            'author' => 'Confucius',
            'background' => '3.jpg'
        ]);

        //... add more quotes if you want!
    }
}