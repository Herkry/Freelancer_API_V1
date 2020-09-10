<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {

            $table->bigIncrements("project_id");
            $table->string("project_status");
            $table->string("project_review")->default("No review made");
            $table->string("project_description");
            $table->double("project_price")->nullable();
            $table->string("project_delivery_time")->nullable();

            $table->unsignedBigInteger("appuser_inviter_id");
            $table->foreign("appuser_inviter_id")->references("appuser_id")->on("app_users");
            $table->unsignedBigInteger("appuser_freelancer_id")->unsigned();
            $table->foreign("appuser_freelancer_id")->references("appuser_id")->on("app_users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
