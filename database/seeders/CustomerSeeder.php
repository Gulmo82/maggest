<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Customer::create([
            'customer_name'=> 'Cliente '.rand(1,500),
            'gest_id'=> rand(1,500)
        ]);
        Customer::create([
            'customer_name'=> 'Cliente '.rand(1,500),
            'gest_id'=> rand(1,500)
        ]);
        Customer::create([
            'customer_name'=> 'Cliente '.rand(1,500),
            'gest_id'=> rand(1,500)
        ]);

        Customer::create([
            'customer_name'=> 'Cliente '.rand(1,500),
            'gest_id'=> rand(1,500)
        ]);

        Customer::create([
            'customer_name'=> 'Cliente '.rand(1,500),
            'gest_id'=> rand(1,500)
        ]);

        Customer::create([
            'customer_name'=> 'Cliente '.rand(1,500),
            'gest_id'=> rand(1,500)
        ]);

        Customer::create([
            'customer_name'=> 'Cliente '.rand(1,500),
            'gest_id'=> rand(1,500)
        ]);



    }
}
