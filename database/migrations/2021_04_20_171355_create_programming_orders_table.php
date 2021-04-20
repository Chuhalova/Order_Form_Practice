<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammingOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programming_orders', function (Blueprint $table) {
            $table->id();
            $table->enum('discipline',['web_programming', 'desktop_applications_development', 'mobile_applications_development', 'database_design_and_optimization', 'database_analysis_and_reports', 'computer_networking_and_cybersecurity', '3D_CAD_modeling', 'algorithms', 'other'])->default('web_programming');
            $table->string('instructions')->nullable();
            $table->string('software')->nullable();
            $table->enum('deadline',['4h', '8h', '24h', '2d', '3d', '5d', '7d', '14d'])->default('4h');
            $table->enum('tasksize',['small', 'medium', 'large', 'extralarge'])->default('small');
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
        Schema::dropIfExists('programming_orders');
    }
}
