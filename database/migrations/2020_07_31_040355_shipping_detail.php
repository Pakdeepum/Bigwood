
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ShippingDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_details', function (Blueprint $table) {
            $table->id();
            $table->string('textTH');
            $table->string('textEN');
            $table->timestamps();
        });

        DB::table('shipping_details')->insert(
            array(
                'id' => '1',
                'textTH' => 'บริการนำเข้า-ส่งออก สินค้าต่างประเทศ',
                'textEN' => 'eng บริการนำเข้า-ส่งออก สินค้าต่างประเทศ',
                "created_at" =>  date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            )
        );

        DB::table('shipping_details')->insert(
            array(
                'id' => '2',
                'textTH' => 'รับให้คำปรึกษา-นำเข้าและส่งออกสินค้าไม้ แพ็คกิ้ง ดำเนินการด้านเอกสารเรื่องการนำเข้าและส่งออกสินค้าต่างประเทศ',
                'textEN' => 'eng รับให้คำปรึกษา-นำเข้าและส่งออกสินค้าไม้ แพ็คกิ้ง ดำเนินการด้านเอกสารเรื่องการนำเข้าและส่งออกสินค้าต่างประเทศ',
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
        Schema::dropIfExists('shipping_details');
    }
}
