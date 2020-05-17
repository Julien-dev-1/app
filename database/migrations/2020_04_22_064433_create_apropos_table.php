<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\projet;

class CreateAproposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apropos', function (Blueprint $table) {
            $table->id();
            $table->integer('projet_id')->foreign('projet_id')->references('id')->on('projets')->onDelete('cascade');
            $table->longText('idees');
            $table->longText('constatation');
            $table->longText('Solution');
            $table->longText('impacts_positif');
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
        Schema::dropIfExists('apropos');
        // Schema::table('apropos', function (Blueprint $table) {
        //     $table->dropForeign('apropos_projet_id_foreign');
        // });
    }
}
