<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->Integer('user_id');
            $table->string("title");
            $table->string("description");
            $table->string("categorie");
            $table->string("localisation");
            $table->string("video_path")->default("projet1.mp4");
            $table->integer("projet_jeutons");
            $table->integer("valifunders")->default(0);
            $table->integer("days");
            $table->integer("end_project")->default(0);
            $table->string("path_img");
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
        Schema::dropIfExists('projets');
    }
}
