<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // =============== Employe Basic Details =============================
            $table->string('fname');
            $table->string('lname');
            $table->integer('age');
            $table->string('gender');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('phone');
            $table->string('email');
            $table->string('web');
            $table->string('address');
            $table->longText('about');
            $table->string('image');

            // =============== Employe Education =============================
            $table->string('ssc_board');
            $table->string('ssc_roll_no');
            $table->string('ssc_result');
            $table->string('ssc_passing_year');

            $table->string('hsc_board');
            $table->string('hsc_roll_no');
            $table->string('hsc_result');
            $table->string('hsc_passing_year');

            $table->string('grad_exam_type');
            $table->string('grad_result');
            $table->string('grad_field');
            $table->string('grad_pass_year');
            $table->string('grad_university');
            $table->string('grad_duration');

            $table->string('ms_exam_type',);
            $table->string('ms_result',);
            $table->string('ms_subject',);
            $table->string('ms_pass_year',);
            $table->string('ms_university',);
            $table->string('ms_duration',);

            // =============== Employe Work Experience =============================
            $table->string('cname');
            $table->string('jposition');
            $table->string('cfrom');
            $table->string('cto');
            $table->longText('job_experience');
            $table->string('image1');

            // =============== Employe Skills =============================
            $table->string('skill');
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
        Schema::dropIfExists('products');
    }
}
