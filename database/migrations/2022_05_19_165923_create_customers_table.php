<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('type_house')->nullable();

            //investment
            $table->integer('number_floor_i')->nullable();
            $table->integer('number_apartment')->nullable();
            $table->integer('aria_i')->nullable();


            //basic
            $table->integer('aria_b')->nullable();
            $table->integer('number_floor_b')->nullable();
            $table->string('type_finish_out')->nullable();
            $table->string('type_finish_in')->nullable();


            $table->string('type_court')->nullable();
            $table->string('type_court_')->nullable();

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
        Schema::dropIfExists('customers');
    }
}
