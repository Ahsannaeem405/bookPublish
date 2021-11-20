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
            $table->string('b_file')->nullable();
            $table->string('b_title')->nullable();
            $table->string('b_paper')->nullable();
            $table->string('b_type')->nullable();
            $table->string('b_p_type')->nullable();
            $table->string('b_color')->nullable();
            $table->string('b_num_copy')->nullable();
            $table->string('designer')->nullable();
            $table->string('design_image')->nullable();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('status')->nullable();
            $table->timestamps();
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
