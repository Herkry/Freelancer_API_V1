<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_users', function (Blueprint $table) {

            $table->bigIncrements("appuser_id");
            $table->string("appuser_pass");
            $table->string("appuser_fname");
            $table->string("appuser_lname");
            $table->string("appuser_email")->nullable();
            $table->string("appuser_location")->nullable();
            $table->string("appuser_type")->nullable(); //user or freelancer
            $table->integer("appuser_phone")->nullable();
            $table->string("appuser_profile_img")->nullable();
            $table->string("appuser_qualifications")->nullable();
            $table->string("appuser_portfolio")->nullable();
            $table->string("appuser_description")->nullable();
            $table->integer("appuser_rating")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_users');
    }
}
