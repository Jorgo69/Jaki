<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('url_image');
            $table->string('description_cours');
            $table->string('langue_cours');
            $table->string('resume_cours');
            $table->string('categorie_cours');
            $table->string('duree_cours');
            $table->string('difficulte_cours');
            $table->string('debouche_cours');
            $table->string('prix_cours');
         
            $table->foreignId('user_id')-> references('id')
            ->on('users');
            $table->foreignId('teacher_id')-> references('id')
            ->on('teacher');

            $table->string('plan_un');
            $table->string('description_un');
            $table->string('video_un');

            $table->string('plan_deux')->nullable();
            $table->string('description_deux')->nullable();
            $table->string('video_deux')->nullable();

            $table->string('plan_trois')->nullable();
            $table->string('description_trois')->nullable();
            $table->string('video_trois')->nullable();


            $table->timestamps();
        });
        schema::enableForeignKeyConstraints(); // cle secondaire
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        schema::table('cours', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']);
        });
        Schema::dropIfExists('cours');
    }
}