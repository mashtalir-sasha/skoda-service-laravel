<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->text('name');
            $table->text('addr');
            $table->text('addrUkr');
            $table->text('phone1')->nullable();
            $table->text('phone2')->nullable();
            $table->text('phone3')->nullable();
            $table->text('phone4')->nullable();
            $table->text('fax')->nullable();
            $table->text('timetable');
            $table->text('timetableUkr');
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('youtube')->nullable();
            $table->text('phone-top')->nullable();
            $table->text('longitude');
            $table->text('latitude');
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
