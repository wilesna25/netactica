<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        //Crea tipos
        factory(App\Type::class)->times(3)->create(); 

        //Crea ciudades
        factory(App\City::class,10)->create()->each(function(App\City $city)
        { 
            //Crea hoteles
            factory(App\Hotel::class,10)->create(['city_id' => $city->id])
            ->each(function(App\Hotel $hotel)
            {   
                    factory(App\Room::class,7)->create([
                        'hotel_id' => $hotel->id,
                        // 'type_id' => $type->id,
                    ]); 
               
            });
        });

    }
}
