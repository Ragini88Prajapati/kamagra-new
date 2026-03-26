<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDesktopAndMobileImageToAdminBannerModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin_banner_models', function (Blueprint $table) {
            $table->string('desktop_image')->nullable()->after('image_name');
            $table->string('mobile_image')->nullable()->after('desktop_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin_banner_models', function (Blueprint $table) {
            $table->dropColumn(['desktop_image', 'mobile_image']);
        });
    }
}
