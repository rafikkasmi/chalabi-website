<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSliderTextsToStoreDataTable extends Migration
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
            $table->string("slider_headline1")->nullable()->default("Les Meilleures bagues");
            $table->string("slider_text1")->nullable()->default("Consultez notre gamme");
            $table->string("slider_headline2")->nullable()->default("La meilleure qualité dans le marché");
            $table->string("slider_text2")->nullable()->default("Avec des prix adéquats");
            $table->string("slider_headline3")->nullable()->default("Des Parrures complet");
            $table->string("slider_text3")->nullable()->default("Consultez notre gamme");
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
