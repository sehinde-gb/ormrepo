<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddMedia2FieldsToBlogsTable extends Migration {

    /**
     * Make changes to the table.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function(Blueprint $table) {

            $table->string('media2_file_name')->nullable();
            $table->integer('media2_file_size')->nullable()->after('media2_file_name');
            $table->string('media2_content_type')->nullable()->after('media2_file_size');
            $table->timestamp('media2_updated_at')->nullable()->after('media2_content_type');

        });

    }

    /**
     * Revert the changes to the table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function(Blueprint $table) {

            $table->dropColumn('media2_file_name');
            $table->dropColumn('media2_file_size');
            $table->dropColumn('media2_content_type');
            $table->dropColumn('media2_updated_at');

        });
    }

}