<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_elements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_work');
            $table->text('preliminary_description_work');
            $table->text('full_description_work');
            $table->integer('category_work');
            $table->text('name_image_work');
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
        Schema::dropIfExists('portfolio_elements');
    }
}
