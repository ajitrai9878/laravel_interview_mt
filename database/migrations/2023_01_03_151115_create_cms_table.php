<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms', function (Blueprint $table) {
            $table->id();
            $table->string('header_logo')->nullable();
            $table->string('header_home_button_name')->nullable();
            $table->string('header_contact_us_button_name')->nullable();
            $table->string('banner_text_1')->nullable();
            $table->string('banner_text_2')->nullable();
            $table->string('banner_text_3')->nullable();
            $table->string('banner_contact_us_button_name')->nullable();
            $table->string('welcome_section_text_1')->nullable();
            $table->text('welcome_section_text_2')->nullable();
            $table->string('welcome_sub_section_title_1')->nullable();
            $table->text('welcome_sub_section_description_1')->nullable();
            $table->string('welcome_sub_section_title_2')->nullable();
            $table->text('welcome_sub_section_description_2')->nullable();
            $table->string('welcome_sub_section_title_3')->nullable();
            $table->text('welcome_sub_section_description_3')->nullable();
            $table->text('banner_section_2_text_1')->nullable();
            $table->text('banner_section_2_text_2')->nullable();
            $table->text('banner_section_2_text_3')->nullable();
            $table->string('banner_section_2_contact_us_button_name')->nullable();
            $table->string('what_you_get_area_text')->nullable();
            $table->string('what_you_get_area_sub_section_title_1')->nullable();
            $table->text('what_you_get_area_sub_section_description_1')->nullable();
            $table->string('what_you_get_area_sub_section_title_2')->nullable();
            $table->text('what_you_get_area_sub_section_description_2')->nullable();
            $table->string('what_you_get_area_sub_section_title_3')->nullable();
            $table->text('what_you_get_area_sub_section_description_3')->nullable();
            $table->string('how_it_works_area_text')->nullable();
            $table->string('how_it_works_area_sub_section_title_1')->nullable();
            $table->text('how_it_works_area_sub_section_description_1')->nullable();
            $table->string('how_it_works_area_sub_section_title_2')->nullable();
            $table->text('how_it_works_area_sub_section_description_2')->nullable();
            $table->string('how_it_works_area_sub_section_title_3')->nullable();
            $table->text('how_it_works_area_sub_section_description_3')->nullable();
            $table->string('join_our_network_area_text')->nullable();
            $table->string('join_our_network_area_sub_section_title_1')->nullable();
            $table->text('join_our_network_area_sub_section_description_1')->nullable();
            $table->string('join_our_network_area_sub_section_title_2')->nullable();
            $table->text('join_our_network_area_sub_section_description_2')->nullable();
            $table->string('last_section_text_1')->nullable();
            $table->text('last_section_text_2')->nullable();
            $table->text('last_section_text_3')->nullable();
            $table->string('last_section_contact_us_button_name')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('footer_section_home_text')->nullable();
            $table->string('footer_section_contact_us_text')->nullable();
            $table->string('last_section_rights_text')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('google')->nullable();
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
        Schema::dropIfExists('cms');
    }
}
