<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('meta_keyword');
            $table->string('meta_author');
            $table->string('slogan');
            $table->string('slogan_description');
            $table->string('why_choose_us');
            $table->text('about');
            $table->text('meta_description');
            $table->string('logo');
            $table->string('address');
            $table->string('banner_1');
            $table->string('banner_2');
            $table->string('fb');
            $table->string('ig');
            $table->string('tweet');
            $table->string('fax');
            $table->string('phone');
            $table->string('email');
            $table->text('maps')->nullable();
            $table->text('captcha')->nullable();
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
        Schema::dropIfExists('configs');
    }
}
