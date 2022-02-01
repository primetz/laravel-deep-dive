<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')
                ->unsigned()
                ->index();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
            $table->bigInteger('source_id')
                ->unsigned()
                ->index();
            $table->foreign('source_id')
                ->references('id')
                ->on('sources');
            $table->bigInteger('status_id')
                ->unsigned()
                ->index();
            $table->foreign('status_id')
                ->references('id')
                ->on('statuses');
            $table->string('title', 255)
                ->unique();
            $table->text('content');
            $table->string('image', 100);
            $table->dateTime('publish_date')
                ->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
