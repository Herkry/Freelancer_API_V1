<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSpecializationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_specializations', function (Blueprint $table) {

            $table->increments("user_specialization_id");
            $table->string("user_specialization_description");
            
            $table->integer("appuser_id")->unsigned();
            $table->foreign("appuser_id")->references("appuser_id")->on("app_users");
            $table->integer("specialization_id")->unsigned();
            $table->foreign("specialization_id")->references("specialization_id")->on("specializations");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_specializations');
    }
}
