<?php

namespace Database\Seeders;

use App\Models\Complaint;
use Illuminate\Database\Seeder;

class ComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Complaint::create([
           'title' => 'Product is not well built',
            'description' => 'The received product does not meet the displayed item on the website,
             the quality material is not silver as mentioned in the product details',
            'status' => 'pending resolution',
            'user_id' => 2,
            'complaint_category' => 1
        ]);
    }
}
