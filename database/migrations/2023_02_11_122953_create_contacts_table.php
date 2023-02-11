<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('firstname',30);
            $table->string('lastname',30);
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('contact_mobile');
            $table->string('contact_phone');
            $table->string('email',120)->unique();
            $table->string('street',120);
            $table->string('city',120);
            $table->string('hobbies',250);
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
