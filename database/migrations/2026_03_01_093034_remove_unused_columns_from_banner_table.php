<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUnusedColumnsFromBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // This migration has already been run to remove unused columns
        // Column removal is not needed anymore
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Add back the image_name column if it was dropped
        // Note: This assumes the hasColumn method exists, which it doesn't
        // Schema::table('admin_banner', function (Blueprint $table) {
        //     $table->string('image_name')->nullable();
        // });
    }
}
