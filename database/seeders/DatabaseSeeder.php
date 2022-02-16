<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Country;
use App\Models\UserDetail;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = [
            [
                'email' => 'alex@tempmail.com',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
             ],
             [
                 'email' => 'maria@tempmail.com',
                 'active' => 1,
                 'created_at' => Carbon::now(),
                 'updated_at' => Carbon::now()
             ],
             [
                 'email' => 'john@tempmail.com',
                 'active' => 1,
                 'created_at' => Carbon::now(),
                 'updated_at' => Carbon::now()
             ],
             [
                 'email' => 'dominik@test.com',
                 'active' => 0,
                 'created_at' => Carbon::now(),
                 'updated_at' => Carbon::now()
             ],
             [
                 'email' => 'andreas@yahoo.de',
                 'active' => 0,
                 'created_at' => Carbon::now(),
                 'updated_at' => Carbon::now()
             ],
             [
                 'email' => 'Taaaaaaa@test.com',
                 'active' => 1,
                 'created_at' => Carbon::now(),
                 'updated_at' => Carbon::now()
             ],
             [
                 'email' => 'rerere@test_mail.com',
                 'active' => 1,
                 'created_at' => Carbon::now(),
                 'updated_at' => Carbon::now()
             ]
        ];
        User::insert($user);

        $country = [
            [
                'name' => 'Austria',
                'iso2' => 'AT',
                'iso3' => 'AUT'
            ],
            [
                'name' => 'France',
                'iso2' => 'FR',
                'iso3' => 'FRA'
            ],
            [
                'name' => 'Germany',
                'iso2' => 'DE',
                'iso3' => 'DEU'
            ],
            [
                'name' => 'Spain',
                'iso2' => 'ES',
                'iso3' => 'ESP'
            ],
            [
                'name' => 'Russian Federation',
                'iso2' => 'RU',
                'iso3' => 'RUS'
            ],
            [
                'name' => 'China',
                'iso2' => 'CN',
                'iso3' => 'CHN'
            ]
        ];

        Country::insert($country);

        $user_detail = [
            [
                'user_id' => 1,
                'citizenship_country_id' => 1,
                'first_name' => 'Alex',
                'last_name' => 'Petro',
                'phone_number' => '0043664111111'
            ],
            [
                'user_id' => 4,
                'citizenship_country_id' => 1,
                'first_name' => 'Dominik',
                'last_name' => 'Allan',
                'phone_number' => '00436644444444'
            ],
            [
                'user_id' => 5,
                'citizenship_country_id' => 3,
                'first_name' => 'Andreas',
                'last_name' => 'Snow',
                'phone_number' => '004366455555555'
            ],
            [
                'user_id' => 7,
                'citizenship_country_id' => 5,
                'first_name' => 'Igor',
                'last_name' => 'Snow',
                'phone_number' => '0043664777777'
            ],
            [
                'user_id' => 6,
                'citizenship_country_id' => 1,
                'first_name' => 'Max',
                'last_name' => 'Mustermann',
                'phone_number' => '0043664777777'
            ],
        ];

        UserDetail::insert($user_detail);
    }
}
