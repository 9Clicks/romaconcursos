<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tbl_title', 60);
            $table->string('tbl_footer', 260);
            $table->string('tbl_descript', 260);
            $table->string('tbl_keywords', 150);
            $table->string('tbl_author', 150);
            $table->string('tbl_language', 150);
            $table->string('tbl_url', 150);
            $table->string('tbl_subject', 150);
            $table->string('tbl_publisher', 150);
            $table->string('tbl_search', 150);
            $table->string('tbl_generator', 150);
            $table->string('tbl_system', 150);
            $table->string('tbl_version', 150);
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
        Schema::drop('app_configs');
    }
}
