<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompanyIdToReceiptsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('receipts', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id')->nullable()->after('office_id');
            
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::table('receipts', function (Blueprint $table) {
            $table->dropColumn('company_id');
            
        });
    }
}
