<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCitiesIdColumnToHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hotels', function (Blueprint $table) {
            //
            $table->dropForeign('hotels_city_id_foreign');
            $table->dropColumn('city_id');
        });
    }
}
