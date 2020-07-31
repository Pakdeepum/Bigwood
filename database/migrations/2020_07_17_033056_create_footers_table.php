<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('value')->nullable();
            $table->timestamps();
        });

        DB::table('footers')->insert(
            array(
                'id' => '1',
                'value' => '064 3419847',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('footers')->insert(
            array(
                'id' => '2',
                'value' => '097 1587474',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('footers')->insert(
            array(
                'id' => '3',
                'value' => '081 3666652',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('footers')->insert(
            array(
                'id' => '4',
                'value' => 'brbigwoodphuket@gmail.com',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('footers')->insert(
            array(
                'id' => '5',
                'value' => '@ LINE',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('footers')->insert(
            array(
                'id' => '6',
                'value' => 'https://www.google.co.th/',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footers');
    }
}
