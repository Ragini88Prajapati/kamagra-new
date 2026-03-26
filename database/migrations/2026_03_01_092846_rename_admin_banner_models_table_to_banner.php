<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameAdminBannerModelsTableToAdminBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Rename the admin_banner_models table to admin_banner
        Schema::rename('admin_banner_models', 'admin_banner');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Revert the table name from admin_banner back to admin_banner_models
        Schema::rename('admin_banner', 'admin_banner_models');
    }
}
