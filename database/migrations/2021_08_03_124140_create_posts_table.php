<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('job_title');
            $table->string('location');
            $table->string('category');
            $table->string('job_tags');
            $table->longText('description');
            $table->string('application_url');
            $table->string('closing_date');
            $table->string('company_name');
            $table->string('web');
            $table->string('tagline');
            $table->string('image3');
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
        Schema::dropIfExists('posts');
    }
}
