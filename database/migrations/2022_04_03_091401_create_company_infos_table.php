<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_infos', function (Blueprint $table) {
            $table->id();
            $table->string('companyAddress');
            $table->string('facebokLink');
            $table->string('linkedInLink');
            $table->string('twitterLink');
            $table->string('instagramLink');
            $table->string('companyLogo');
            $table->string('companyName');
            $table->string('chairmanName');
            $table->string('chairmanImage');
            $table->string('chairmanMessage');
            $table->string('sliderImage');
            $table->string('aboutImage');
            $table->string('aboutCompany');
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
        Schema::dropIfExists('company_infos');
    }
};
