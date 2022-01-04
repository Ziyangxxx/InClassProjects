<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();

            $table->string('image',255);

            $table->string('name',255);

            $table->text('other_names');

            $table->string('origin',255);

            $table->text('male_weight');

            $table->text('female_weight');

            $table->integer('life_span');

            $table->foreignId('category_id');

            $table->enum('legitimacy', ['No limit', 'Areas limited']);

            $table->longText('description');
            
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
        Schema::dropIfExists('dogs');
    }
}
