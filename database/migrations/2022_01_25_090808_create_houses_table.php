<?php

/**
CREARE MIGRAZIONE
php artisan make:migration create_houses_table
UPDATE
php artisan make:migration update_houses_table --table=houses

COMANDI
php artisan migrate  -> lancia l'ultima migrazione
php artisan migrate:rollback  -> annulla l'ultima migrazione
php artisan migrate:reset  -> cancella tutto il db

FAKER
composer remove fzaninotto/faker
composer require fakerphp/faker

SEEDER
php artisan make:seeder HousesTableSeeder
php artisan db:seed --class=HousesTableSeeder
 *
 *
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();

            $table->string('address',200);
            $table->string('postal_code',10);
            $table->string('city',50);
            $table->string('state',50);
            $table->smallInteger('square_meters')->unsigned();
            $table->tinyInteger('rooms')->unsigned();
            $table->tinyInteger('bathrooms')->unsigned();
            $table->text('description')->nullable();
            $table->integer('price')->unsigned();
            $table->boolean('is_available')->unsigned()->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
