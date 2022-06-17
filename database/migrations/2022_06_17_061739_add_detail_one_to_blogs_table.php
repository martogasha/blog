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
            $table->string('detailB')->nullable();
            $table->string('detailC')->nullable();
            $table->string('detailD')->nullable();
            $table->string('whoSaid')->nullable();
            $table->string('backlink')->nullable();
            $table->string('backlinkOne')->nullable();
            $table->string('backlinkTwo')->nullable();
            $table->string('backlinkThree')->nullable();
            $table->string('backlinkFour')->nullable();
            $table->string('backlinkFive')->nullable();
            $table->string('backlinkSix')->nullable();
            $table->string('backlinkSeven')->nullable();
            $table->string('backlinkEight')->nullable();
            $table->string('backlinkNine')->nullable();
            $table->string('backlinkTen')->nullable();

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
