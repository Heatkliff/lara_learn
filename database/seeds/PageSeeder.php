<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lastWeek = time() + (7 * 24 * 60 * 60);
        for ($i = 0; $i<25; $i++){
            DB::table('pages')->insert([
                'title' => str_random(10),
                'body' => str_random(50),
                'author_id' => 1,
                'categories_id' => ' ',
                'open' => true,
                'created_at' => $this->rand_date($lastWeek,date('Y-m-d')),
                'updated_at' => date('Y-m-d'),
            ]);
        }
    }

    function rand_date($min_date, $max_date) {
        /* Gets 2 dates as string, earlier and later date.
           Returns date in between them.
        */

        $min_epoch = strtotime($min_date);
        $max_epoch = strtotime($max_date);

        $rand_epoch = rand($min_epoch, $max_epoch);

        return date('Y-m-d H:i:s', $rand_epoch);
    }
}
