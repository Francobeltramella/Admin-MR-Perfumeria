<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullableRubrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rubros', function (Blueprint $table) {
            // change() tells the Schema builder that we are altering a table
            $table->string('nombre')->nullable()->change();
        });

        Schema::table('subrubros', function (Blueprint $table) {
            // change() tells the Schema builder that we are altering a table
            $table->string('nombre')->nullable()->change();
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
