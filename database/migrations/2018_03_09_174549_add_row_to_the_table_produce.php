<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRowToTheTableProduce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produce', function (Blueprint $table) {
            //
            $table->string('title');
            $table->text('description');
            $table->string('photos');
            $table->string('phone');
            $table->string('email');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produce', function (Blueprint $table) {
            $table->dropColumn(['title', 'description', 'photos', 'photos', 'phone', 'email']);
        });
    }
}
