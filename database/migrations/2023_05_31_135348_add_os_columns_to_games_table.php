<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->boolean('windows')->default(false)->after('thumb');
            $table->boolean('mac')->default(false)->after('windows');
            $table->boolean('linux')->default(false)->after('mac');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropColumn('windows');
            $table->dropColumn('mac');
            $table->dropColumn('linux');
        });
    }
};
