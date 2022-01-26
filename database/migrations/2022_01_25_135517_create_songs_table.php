<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 60);
            $table->string('genre', 60);
            $table->time('duration');
            $table->boolean('explicit');
            $table->boolean('single');
            $table->tinyInteger('rating')->unsigned();
            $table->text('lyric')->nullable();

            // $table->foreignId('album_id');
            // $table->foreignId('artist_id');
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
        Schema::dropIfExists('songs');
    }
}
