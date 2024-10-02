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
        Schema::table("users", function (Blueprint $table) {
            //cria uma coluna com a chave estrangeira, depois da coluna remember_token, sendo o id da tabela cidades
          
            $table ->foreignId('cidade_id')->after('remember_token')->constrained('cidades');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("users", function (Blueprint $table) {
            //realiza o rollback se necessário
            $table->dropColumn("cidade_id");
        });
    }
};
