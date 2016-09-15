<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        /**/
        Model::unguard();

        DB::table('movies')->delete();
        $this->call('MovieTableSeeder');

        Model::reguard();
    }
}

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();
      
      /*foreach(range(1,50) as $index){
        Movie::create([
          'name'=>$faker->sentence(2),
          'description'=>$faker->sentence(4),
          ]);
      }*/
      foreach(range(1,5) as $index){
        DB::table('movies')->insert([
          'name'=>$faker->sentence(2),
          'description'=>$faker->sentence(4),
          'link'=>$faker->sentence(2),
          'category'=>$faker->sentence(4),
          'rating'=>$faker->sentence(4),
          ]);
      }


    }
}