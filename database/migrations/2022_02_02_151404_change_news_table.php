<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->bigInteger('source_id')
                ->unsigned()
                ->nullable(true)
                ->change();
            $table->string('image', 100)
                ->unsigned()
                ->nullable(true)
                ->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->bigInteger('source_id')
                ->unsigned()
                ->nullable(false)
                ->change();
            $table->string('image', 100)
                ->unsigned()
                ->nullable(false)
                ->change();
        });
    }
}
