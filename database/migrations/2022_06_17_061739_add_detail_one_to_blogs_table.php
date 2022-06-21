<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailOneToBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('detailA')->nullable();
            $table->string('urlA')->nullable();
            $table->string('detailB')->nullable();
            $table->string('urlB')->nullable();
            $table->string('detailC')->nullable();
            $table->string('urlC')->nullable();
            $table->string('detailD')->nullable();
            $table->string('urlD')->nullable();
            $table->string('urlE')->nullable();
            $table->string('urlF')->nullable();
            $table->string('whoSaid')->nullable();
            $table->string('urlAName')->nullable();
            $table->string('urlBName')->nullable();
            $table->string('urlCName')->nullable();
            $table->string('urlDName')->nullable();
            $table->string('youtube')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            //
        });
    }
}
