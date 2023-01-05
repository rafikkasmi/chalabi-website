<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(["meta_title","meta_description","meta_keywords","small_description","qty","tax","status","trending"]);
            $table->integer('type')->nullable();
            $table->integer('gender')->nullable();
            $table->string('selling_price')->nullable()->change();
            $table->integer('poids')->nullable();
            $table->string('brand')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
