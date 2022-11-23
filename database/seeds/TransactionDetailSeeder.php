<?php

use Illuminate\Database\Seeder;

use App\TransactionDetail;
class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TransactionDetail::class, 5)->create();
    }
}
