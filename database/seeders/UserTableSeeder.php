<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developers = [
            [
                'name' => 'Quentin',
                'email' => 'quentinw@ringier.co.za',
            ]
        ];

        collect($developers)->each(function($developer){
            User::factory()->create([
                'name' => $developer['name'],
                'email' => $developer['email']
            ]);
        });

        $customer = [
            [
                'name' => 'Customer',
                'email' => 'customer@test.cool',
            ]
        ];

        collect($customer)->each(function ($customer){
            User::factory()->create([
                'name' => $customer['name'],
                'email' => $customer['email']
            ]);
        });
    }
}
