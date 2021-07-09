<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageUrlToBcontentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bcontents', function (Blueprint $table) {
            //
            $table->string('image_url')->nullable(); //image_url という名前の列追加。nullOK
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bcontents', function (Blueprint $table) {
            //
            $table->dropColumn('image_url'); //列削除
        });
    }
}
