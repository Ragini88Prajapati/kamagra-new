<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMissingProductInformationTabsFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->text('usage_instructions')->nullable()->after('description1');
            $table->text('warnings')->nullable()->after('sideEffect');
            $table->text('mechanism_of_action')->nullable()->after('Contraindications');
            $table->text('tips')->nullable()->after('shipping');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropColumn(['usage_instructions', 'warnings', 'mechanism_of_action', 'tips']);
        });
    }
}
