<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_sub_categories', function (Blueprint $table) {
            $table->id("id");
            $table->string("name");
            // $table->string("description");
            $table->string("image_url");

            // $table->unsignedBigInteger("appuser_id");
            // $table->foreign("appuser_id")->references("appuser_id")->on("app_users");

            $table->unsignedBigInteger("skillsupercategory_id");
            $table->foreign("skillsupercategory_id")->references("skillsupercategory_id")->on("skill_super_categories");
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
        Schema::dropIfExists('skill_sub_categories');
    }
}
