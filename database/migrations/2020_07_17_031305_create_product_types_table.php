<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameTH');
            $table->string('nameEN');
            $table->string('image_name')->nullable();
            $table->timestamps();
        });

        DB::table('product_types')->insert(
            array(
                'nameTH' => 'โต๊ะไม้',
                'nameEN' => 'Wooden table',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('product_types')->insert(
            array(
                'nameTH' => 'เก้าอี้ไม้',
                'nameEN' => 'Wooden chair',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('product_types')->insert(
            array(
                'nameTH' => 'ตู้ เตียง โต๊ะเครื่องแป้ง',
                'nameEN' => 'storage bed',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('product_types')->insert(
            array(
                'nameTH' => 'ของตกแต่งภายในบ้านจากไม้',
                'nameEN' => 'Assetseries',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('product_types')->insert(
            array(
                'nameTH' => 'โคมไฟจากหวาย ไม้ไผ่',
                'nameEN' => 'bamboo lamp',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('product_types')->insert(
            array(
                'nameTH' => 'ไม้พื้น ไม้บันได ไม้ผนัง ไม้แผ่น ไม้ปาเก้',
                'nameEN' => 'Wooden floor',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('product_types')->insert(
            array(
                'nameTH' => 'งานปูพื้น ปูพนัง ต่อเติมบ้าน รับสร้างบ้านไม้ บ้านทรงไทย/ไทยประยุกต์',
                'nameEN' => 'rebuild',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );
        
        DB::table('product_types')->insert(
            array(
                'nameTH' => 'งานไม้อื่นๆ',
                'nameEN' => 'Other wooden craft',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('product_types')->insert(
            array(
                'nameTH' => 'เพิ่มเติม',
                'nameEN' => 'etc',
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
        Schema::dropIfExists('product_types');
    }
}
