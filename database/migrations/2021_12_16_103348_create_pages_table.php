<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->text('logo');
            $table->text('portfolio_title');
            $table->text('portfolio_content');
            $table->text('diarie_title');
            $table->text('diarie_content');
            $table->text('contact_bg');
            $table->text('contact_head_logo');
            $table->text('copywrite');
            $table->text('contact_details');
            $table->text('contact_map');
            $table->text('contact_banner');
            $table->text('contact_logo');
            $table->text('massenger');
            $table->text('md_speech');
            $table->text('md_speech_img');
            $table->text('chairman_speech');
            $table->text('chairman_speech_img');
            $table->text('service_banner');
            $table->timestamps();
        });
    }

    // logo,
    // portfolio_title,
    // portfolio_content,
    // diarie_title,
    // diarie_content,
    // contact_bg,
    // contact_head_logo,
    // copywrite,
    // contact_details,
    // contact_map,
    // contact_banner,
    // contact_logo,
    // massenger,
    // md_speech,
    // chairman_speech,
    // service_banner,


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
