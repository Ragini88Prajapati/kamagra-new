<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropFkeyOfProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product', function (Blueprint $table) {
            // Attempt to drop foreign keys with error handling for different possible naming conventions
            $possibleBrandForeignKeys = [
                'product_brand_id_foreign',
                'product_product_brand_id_foreign_foreign',
                'brand_id_foreign'
            ];
            
            foreach ($possibleBrandForeignKeys as $key) {
                try {
                    $table->dropForeign([$key]);
                    break; // Exit loop if successful
                } catch (\Exception $e) {
                    // Foreign key constraint doesn't exist with this name, try next
                    continue;
                }
            }
            
            $possibleGenderForeignKeys = [
                'product_gender_id_foreign',
                'product_product_gender_id_foreign_foreign',
                'gender_id_foreign'
            ];
            
            foreach ($possibleGenderForeignKeys as $key) {
                try {
                    $table->dropForeign([$key]);
                    break; // Exit loop if successful
                } catch (\Exception $e) {
                    // Foreign key constraint doesn't exist with this name, try next
                    continue;
                }
            }
            
            // $table->dropColumn('pick_detail_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}