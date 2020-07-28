<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->text('textTH');
            $table->text('textEN');
            $table->string('image_name')->nullable();
            $table->timestamps();
        });

        DB::table('about_us')->insert(
            array(
                'id' => '1',
                'textTH' => 'บริษัทเริ่มก่อตั้งเมื่อวันที่ 6 มิถุนายน 2555 โดยเริ่มจากการขายเฟอร์นิเจอร์จังหวัดแพร่ซึ่งสินค้าที่ขายเป็นสินค้าโอทอป ของชาวบ้านในตำบลนาพูน อำเภอวังชื้น
                จังหวัดแพร่ และได้เริ่มขยายเช่าพื้นที่สร้างโรงงานและรับทำเฟอร์นิเจอ ตามแบบนี้ลูกค้าต้องการ โดยช่างที่เป็นคนในหมู่บ้าน และได้ขายสินค้าผ่านตลาดออนไลน์
                ตั้งแต่ตอนนั้นเป็นต้นมา โดยลูกค้ามากกว่า 90% คือลูกค้าบนช่องทางออนไลน์',
                'textEN' => 'content1',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('about_us')->insert(
            array(
                'id' => '2',
                'textTH' => 'ปัจจุบันได้มีโรงงาน 2 ที่คือจังหวัดแพร่ และหนองคาย เป็นโรงงานผลิตเฟอร์นิเจอตามออเดอร์ลูกค้า โดยช่างฝีมือมากประสบการ กว่า 20 ปี และได้เปิดหน้าร้านเพื่อจัดจำหน่าย
                2 สาขา คือ ',
                'textEN' => 'content2',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('about_us')->insert(
            array(
                'id' => '3',
                'textTH' => 'ร้าน Big Wood Phuket & Gallery จังหวัดภูเก็ต เปิดตั้งแต่วันที่ 4 มิถุนายน 2560 โดยช่างฝีมือมากประสบการ
                ลูกค้าหน้าร้านและลูกค้าออนไลน์ อัตราส่วนโดยประมาณ หน้าร้าน 30% และออนไลน์ 70%',
                'textEN' => 'content3',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('about_us')->insert(
            array(
                'id' => '4',
                'textTH' => 'สาขาที่สอง เปิดที่จังหวัดสมุทรปราการ เปิดเป็นทางการเมื่อวันที่ 1 มิถุนายน 2563 เพื่อให้สะดวกในการบริการแก่ลูกค้าบริเวณกรุงเทพและปริมณฑลที่ต้องการดูสินค้าและสั่งออเดอร์',
                'textEN' => 'content4',
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
        Schema::dropIfExists('about_us');
    }
}
