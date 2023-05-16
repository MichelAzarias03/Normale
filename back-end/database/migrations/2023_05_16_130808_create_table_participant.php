<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abonne', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nom", 100);
            $table->string("prenom", 30)->nullable();
            $table->integer("age");
            $table->string("proffession", 100)->nullable();
            $table->string("email", 70);
            $table->string("ville", 70);
            $table->string("rue", 70);
            $table->string("pays", 70);
            $table->integer("code_postal");
            $table->string("telephone", 16)->nullable();
            $table->char("sexe")->default("m");
            $table->unsignedInteger("id_mot");
            $table->foreign("id_mot")->references("id")->on("region")->onDelete("cascade");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonne');
    }
};
