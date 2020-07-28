<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id('id');
            $table->string('address');
            $table->string('phone');
            $table->string('line');
            $table->string('email');
            $table->timestamps();
        });

        DB::table('contacts')->insert(
            array(
                'id' => '1',
                'address' => 'Address',
                'phone' => '064 3419847',
                'email' => 'bigwoodphuket@gmail.com',
                'line' => '@ LINE',
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
        Schema::dropIfExists('contacts');
    }
}
