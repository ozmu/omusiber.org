<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('role',[
                'Kurucu',
                'Başkan',
                'Başkan Yrd.',
                'Sosyal Etkinlikler Komitesi Başkanı',
                'Eğlence ve Yarışma Komitesi Başkanı',
                'Eğitim Komitesi Başkanı',
                'Sosyal Medya Yöneticisi',
                'Sosyal Etkinlikler Komitesi Başkan Yardımcısı',
                'Eğlence ve Yarışma Komitesi Başkan Yardımcısı',
                'Eğitim Komitesi Başkan Yardımcısı']);
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('github')->nullable();
            $table->string('linkedin')->nullable();
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
        Schema::dropIfExists('teams');
    }
}
