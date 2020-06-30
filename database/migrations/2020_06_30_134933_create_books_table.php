<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->unsignedBigInteger('author_id')->nullable();
            $table->foreign('author_id')->references('id')->on('authors');
            $table->text('series_title')->nullable();
            $table->string('call_number')->nullable();
            $table->text('publisher')->nullable();
            $table->string('collation')->nullable();
            $table->string('language')->nullable();
            $table->string('isbn_issn')->nullable();
            $table->string('classification')->nullable();
            $table->string('content_type')->nullable();
            $table->string('media_type')->nullable();
            $table->string('carrier_type')->nullable();
            $table->string('edition')->nullable();
            $table->string('subject')->nullable();
            $table->text('specific_detail_info')->nullable();
            $table->text('statement_responsibility')->nullable();
            $table->longText('description')->nullable();
             $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
