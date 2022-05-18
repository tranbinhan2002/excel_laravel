<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRadiusToFacebookLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('facebook_locations', function (Blueprint $table) {
            $table->string('radius')->after('status');
            $table->boolean('is_jp')->default(0)->after('radius');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facebook_locations', function (Blueprint $table) {
            $table->dropColumn(['radius','is_jp']);
        });
    }
}
