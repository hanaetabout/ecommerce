<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *php artisan make:migration 
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'',
               'email'=>'',
               'type'=>1,
               'password'=> bcrypt(''),
            ],
         
            [
               'name'=>'',
               'email'=>'',
               'type'=>0,
               'password'=> bcrypt(''),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}