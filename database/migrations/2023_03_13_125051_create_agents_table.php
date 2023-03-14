<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('agent_code')->nullable();
            $table->string('id_no')->nullable();
            $table->string('company_name')->nullable();
            $table->string('address')->nullable();
            $table->string('kra')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('comm_rate')->nullable();
            $table->string('stamp', 10)->nullable();
            $table->tinyInteger('status')->default('0')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('agents');
    }
}
