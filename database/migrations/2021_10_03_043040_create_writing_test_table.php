<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritingTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writing_test', function (Blueprint $table) {
            $table->string('id',50)->primary();
            $table->string('ielts_module');
            $table->string('test_desciption');
            $table->string('test_paper',1000);
            $table->string('sample_answer',1000);
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
        Schema::dropIfExists('writing_test');
    }
}
