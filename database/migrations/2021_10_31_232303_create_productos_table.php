<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('sku');
            $table->timestamps();

            $table->string('nombre');
            $table->string('identificador');
            $table->string('categoria');
            $table->string('marca');
            $table->text('descripcion');
            $table->string('foto');
            $table->double('precio');
            $table->double('precio_promocional');
            $table->text('variante');
            $table->double('peso');
            $table->double('alto');
            $table->double('ancho');
            $table->double('profundidad');
            $table->integer('stock');
            $table->bigInteger('codigo_barra');
            $table->string('envio');
            $table->string('sexo');
            $table->string('rango_edad');

            $table->foreignId('rubro_id')->nullable();
            $table->foreign('rubro_id','rubro_id_fk')->references('id')->on('rubros');

            $table->foreignId('subrubros_id')->nullable();
            $table->foreign('subrubros_id','subrubros_id_fk')->references('id')->on('subrubros');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
        Schema::table('productos', function(Blueprint $table){       
            $table->dropForeign('rubro_id_fk');
            $table->removeColumn('rubro_id');

            $table->dropForeign('subrubro_id_fk');
            $table->removeColumn('subrubro_id');
        });
    }
}
