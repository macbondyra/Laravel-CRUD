<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\People;
use Faker\Factory as Faker;

class CreatePeopleTable extends Migration
{
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('phone_number');
            $table->string('street');
            $table->string('city_country');
           
            $table->timestamps();
        });

        $faker = Faker::create();
        foreach (range(1, 200) as $index) {
            People::create([
                'name' => $faker->name,
                'surname' => $faker->lastName,
                'phone_number' => $faker->phoneNumber,
                'street' => $faker->streetAddress,
                'city_country' => $faker->city . ', ' . $faker->country,
                
            ]);
        }
    }

    public function down()
    {
        Schema::dropIfExists('people');
    }
}
