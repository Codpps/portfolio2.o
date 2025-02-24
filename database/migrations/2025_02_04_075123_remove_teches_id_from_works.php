<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('works', function (Blueprint $table) {
            $table->dropForeign(['teches_id']);
            $table->dropColumn('teches_id');
        });
    }

    public function down()
    {
        Schema::table('works', function (Blueprint $table) {
            $table->foreignId('teches_id')->constrained()->cascadeOnDelete();
        });
    }
};
