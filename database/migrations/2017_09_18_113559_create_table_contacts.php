<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country',100);
            $table->string('post_number',100);
            $table->string('city',100);
            $table->string('street',100);
            $table->string('house',100);
            $table->string('phone',100);
            $table->string('email',100);
            $table->string('skype',100);
            $table->string('social',500);
            $table->text('text');
            $table->string('title',100);
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
        Schema::dropIfExists('contacts');
    }
}
