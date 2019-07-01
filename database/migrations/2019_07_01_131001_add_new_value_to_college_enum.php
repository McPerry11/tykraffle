<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewValueToCollegeEnum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('college_enum', function (Blueprint $table) {
            DB::statement("ALTER TABLE guests MODIFY college enum('law', 'dent', 'cas', 'cba', 'eng', 'ccss', 'educ', 'cfad', 'undefined')");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_enum', function (Blueprint $table) {
            DB::statement("ALTER TABLE guests MODIFY college enum('law', 'dent', 'cas', 'cba', 'eng', 'ccss', 'educ', 'cfad')");
        });
    }
}
