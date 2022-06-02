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
        Schema::table('questions', function (Blueprint $table) {
            $table->renameColumn('question', 'title');
        });
        Schema::table('questions', function (Blueprint $table) {
            $table->string('title', 255)->change();
            $table->text('body')->nullable(true)->after('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->renameColumn('title', 'question');
        });
        Schema::table('questions', function (Blueprint $table) {
            $table->text('question')->change();
            $table->dropColumn('body');
        });
    }
};
