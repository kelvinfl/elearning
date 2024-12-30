<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('classes', function (Blueprint $table) {
            $table->string('thumbnail')->nullable()->after('name'); // Thumbnail image path
            $table->text('description')->nullable()->after('thumbnail'); // Description of the class
            $table->decimal('price', 10, 2)->nullable()->after('description'); // Price of the class
            $table->decimal('discount', 5, 2)->nullable()->after('price'); // Discount for the class
            $table->string('preview_video')->nullable()->after('discount'); // Preview video path
            $table->json('videos')->nullable()->after('preview_video'); // Videos (array of file paths)
            $table->json('pdfs')->nullable()->after('videos'); // PDFs (array of file paths)
            $table->softDeletes()->after('updated_at'); // For soft deletion
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classes', function (Blueprint $table) {
            $table->dropColumn('thumbnail');
            $table->dropColumn('description');
            $table->dropColumn('price');
            $table->dropColumn('discount');
            $table->dropColumn('preview_video');
            $table->dropColumn('videos');
            $table->dropColumn('pdfs');
            $table->dropSoftDeletes();
        });
    }
}
