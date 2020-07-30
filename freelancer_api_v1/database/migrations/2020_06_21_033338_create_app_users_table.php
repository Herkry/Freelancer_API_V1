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
            $table->string("appuser_name");
            $table->string("appuser_pass");
            $table->string("appuser_fname");
            $table->string("appuser_lname");
            $table->string("appuser_location");
            $table->string("appuser_type");
            $table->string("appuser_phone");
            $table->string("appuser_profile_img");
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
