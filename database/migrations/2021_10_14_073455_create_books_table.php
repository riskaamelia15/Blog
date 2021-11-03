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
        if (Schema::hasTable('books')) {
            return;
        }

        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengarang_id');
            $table->foreign('pengarang_id')
                ->references('id')
                ->on('pengarangs');
            $table->string('nama');
            $table->integer('halaman')->default(0);
            $table->string('translate')->nullable();
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
