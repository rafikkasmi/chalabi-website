<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSliderImagesToStoreDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('store_data', function (Blueprint $table) {
            //
            $table->string("slider_image1")->default("images/slider/1.jpg");
            $table->string("slider_image2")->default("images/slider/2.jpg");
            $table->string("slider_image3")->default("images/slider/3.jpg");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('store_data', function (Blueprint $table) {
            //
        });
    }
}
