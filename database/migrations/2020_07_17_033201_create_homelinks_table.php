<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomelinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homelinks', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->string('image_name')->nullable();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('homelinks')->insert(
            array(
                'id' => '1',
                'link' => 'https://www.facebook.com/woodenFerniturePhaer',
                'name' => 'เฟอร์นิเจอร์รากไม้แพร่',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('homelinks')->insert(
            array(
                'id' => '2',
                'link' => 'https://www.facebook.com/furniturewoodeninPhuket',
                'name' => 'Big Wood Phuket & Galley',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('homelinks')->insert(
            array(
                'id' => '3',
                'link' => 'https://www.facebook.com/WoodTabledesign',
                'name' => 'โต๊ะไม้จามจุรี - ฉ่ำฉา โต้ะไม้มะค่า โต๊ะไม้ประดู่ โต๊ะไม้สัก',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('homelinks')->insert(
            array(
                'id' => '4',
                'link' => 'https://www.facebook.com/woodforhomedesign',
                'name' => 'ไม้ปาเก้ ไม้ปูพื้น ไม้พื้นไม้มะค่า ไม้พื้นไม้สัก โดย Aslan Wood',
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
        Schema::dropIfExists('homelinks');
    }
}
