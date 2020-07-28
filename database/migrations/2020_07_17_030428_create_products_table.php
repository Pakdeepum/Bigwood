<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameTH');
            $table->string('nameEN');
            $table->string('image_name')->nullable();
            $table->string('product_type')->nullable();
            $table->timestamps();
        });

        DB::table('products')->insert(
            array(
                'nameTH' => 'โต๊ะไม้สักขนาด 8 ฟุต',
                'nameEN' => '8 feet long wooden table',
                'product_type' => 'โต๊ะไม้',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('products')->insert(
            array(
                'nameTH' => 'เก้าไม้ประดู่แบบเต็มแผ่น',
                'nameEN' => 'wait for translat',
                'product_type' => 'โต๊ะไม้',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('products')->insert(
            array(
                'nameTH' => 'โต๊ะไม้จำปาสีพาสเทล',
                'nameEN' => 'wait for translat',
                'product_type' => 'โต๊ะไม้',
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
        Schema::dropIfExists('products');
    }
}
