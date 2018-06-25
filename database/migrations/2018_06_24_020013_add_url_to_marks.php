<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUrlToMarks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::table('marks', function($table) {
			$table->string('url');
		});
	}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('marks', function($table) {
        $table->dropColumn('url');
    });
    }
}
