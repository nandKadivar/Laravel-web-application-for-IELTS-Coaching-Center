<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListeningTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listening_test', function (Blueprint $table) {
            $table->string('id',50)->primary();
            $table->string('ielts_module');
            $table->string('test_desciption');
            $table->string('test_paper',1000);
            $table->string('audio_file',1000);
            $table->string('answer_key',1000);
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
        Schema::dropIfExists('listening_test');
    }
}
