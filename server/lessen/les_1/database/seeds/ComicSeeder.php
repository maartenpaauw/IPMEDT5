<?php

use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comics')->insert([
            [
                'titel'     => 'The Man Without Fear',
                'issue'     => 1,
                'superheld' => 'Daredevil'
            ],
            [
                'titel'     => 'The Evil Manace of Electro',
                'issue'     => 2,
                'superheld' => 'Daredevil'
            ],
            [
                'titel'     => 'Ironman',
                'issue'     => 3,
                'superheld' => 'Ironman'
            ]
        ]);
    }
}
