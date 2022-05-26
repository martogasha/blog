<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('placement');
            $table->string('category');
            $table->string('title');
            $table->longText('detailOne');
            $table->longText('quote');
            $table->longText('detailTwo');
            $table->mediumText('image');
            $table->mediumText('imageOne')->nullable();
            $table->mediumText('imageTwo')->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
