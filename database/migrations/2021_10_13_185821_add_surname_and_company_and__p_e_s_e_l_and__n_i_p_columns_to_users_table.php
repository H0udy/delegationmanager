<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSurnameAndCompanyAndPESELAndNIPColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->after('name')->default('');
            $table->string('company')->after('surname')->default('');
            $table->string('PESEL')->after('company')->default('');
            $table->string('NIP')->after('PESEL')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('company');
            $table->dropColumn('PESEL');
            $table->dropColumn('NIP');
        });
    }
}
