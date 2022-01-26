<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('surname', 60);
            $table->string('stage_name', 60);
            $table->string('main_genre', 40);
            $table->text('bio')->nullable();
            $table->tinyInteger('album_published')->unsigned();
            $table->bigInteger('total_streaming')->unsigned();
            // $table->foreignId('disc_id');
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
        Schema::dropIfExists('artists');
    }
}
