<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcesAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resource_assets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('resource_id')
                ->constrained()
                ->onUpdate('cascade');
            $table->string('name');
            $table->string('attachment_name')->nullable();
            $table->string('title')->nullable();
            $table->string('type');
            $table->string('category');
            $table->string('extension');
            $table->softDeletes();
            $table->timestamps();
            $table->unique(['resource_id', 'name']);
            $table->unique(['resource_id', 'type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resources_assets');
    }
}
