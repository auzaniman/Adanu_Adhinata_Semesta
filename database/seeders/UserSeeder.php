<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = [
        [
          'name' => 'Auzan',
          'email' => 'auzan.ip@gmail.com',
          'level_access' => 'Developer',
          'roles' => 'Administrator',
          'team' => 'IT',
          'password' => bcrypt('admin123')
        ],
        [
          'name' => 'Finance',
          'email' => 'finance@gmail.com',
          'level_access' => 'Master',
          'roles' => 'Finance',
          'team' => 'Accounting',
          'password' => bcrypt('admin123')
        ],
        [
          'name' => 'Akuisisi',
          'email' => 'akuisisi@gmail.com',
          'level_access' => 'Staff',
          'roles' => 'Adv',
          'team' => 'Akuisisi',
          'password' => bcrypt('admin123')
        ],
        [
          'name' => 'Learning Center',
          'email' => 'lc@gmail.com',
          'level_access' => 'Staff',
          'roles' => 'Adv',
          'team' => 'LC',
          'password' => bcrypt('admin123')
        ],
        [
          'name' => 'Marketplace',
          'email' => 'marketplace@gmail.com',
          'level_access' => 'Staff',
          'roles' => 'Adv',
          'team' => 'MP',
          'password' => bcrypt('admin123')
        ],
      ];

      User::insert($user);
    }
}
