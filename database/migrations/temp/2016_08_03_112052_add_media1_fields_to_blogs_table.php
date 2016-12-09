<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddMedia1FieldsToBlogsTable extends Migration {

    /**
     * Make changes to the table.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function(Blueprint $table) {

            $table->string('media1_file_name')->nullable();
            $table->integer('media1_file_size')->nullable()->after('media1_file_name');
            $table->string('media1_content_type')->nullable()->after('media1_file_size');
            $table->timestamp('media1_updated_at')->nullable()->after('media1_content_type');

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

            $table->dropColumn('media1_file_name');
            $table->dropColumn('media1_file_size');
            $table->dropColumn('media1_content_type');
            $table->dropColumn('media1_updated_at');

        });
    }

}