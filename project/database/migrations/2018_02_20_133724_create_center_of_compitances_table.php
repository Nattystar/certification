<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCenterOfCompitancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('center_of_compitances', function (Blueprint $table) {
            $table->increments('id');
             $table->string ('Ccode');
                $table->string ('Cname'); 
                    $table->string ('cdesc');
                            $table->string ('Rcode');   
                              $table->string ('Rname');
                               $table->string ('Rdesc');
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
        Schema::dropIfExists('center_of_compitances');
    }
}
