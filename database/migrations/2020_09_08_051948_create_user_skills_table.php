<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_skills', function (Blueprint $table) {
            $table->unsignedBigInteger("sub_skill_id");
            $table->unsignedBigInteger("appuser_id");
            $table->string("poster_image_url");
            $table->string("description");
            $table->string("appuser_qualification");
            $table->timestamps();

            $table->foreign("sub_skill_id")->references("id")->on("skill_sub_categories");
            $table->foreign("appuser_id")->references("appuser_id")->on("app_users");
            $table->primary(array('sub_skill_id', 'appuser_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_skills');
    }
}
