<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->delete();

        DB::table('prices')->insert(array(
            0 =>
            array(
                'id' => 1,
                'key_cd' => 'STONE_BUILDING',
                'type' => 'NUMBER',
                'display_value' => 'سعر بناء الحجر للمتر الواحد',
                'value' => '0',
                'hidden' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-02-22 10:10:10',
                'updated_at' => '2021-02-22 10:10:10',
            ),
            1 =>
            array(
                'id' => 2,
                'key_cd' => 'BASIC_BUILDING',
                'type' => 'NUMBER',
                'display_value' => 'سعر البناء العادي للمتر الواحد',
                'value' => '0',
                'hidden' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-02-22 10:10:10',
                'updated_at' => '2021-02-22 10:10:10',
            ),
            2 =>
            array(
                'id' => 3,
                'key_cd' => 'QSARAH',
                'type' => 'NUMBER',
                'display_value' => 'سعر القصارة للمتر الواحد',
                'value' => '0',
                'hidden' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-02-22 10:10:10',
                'updated_at' => '2021-02-22 10:10:10',
            ),
            3 =>
            array(
                'id' => 4,
                'key_cd' => 'ELECTRICITY',
                'type' => 'NUMBER',
                'display_value' => 'سعر التمديدات الكهربائية',
                'value' => '0',
                'hidden' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-02-22 10:10:10',
                'updated_at' => '2021-02-22 10:10:10',
            ),
            4 =>
            array(
                'id' => 5,
                'key_cd' => 'WATER',
                'type' => 'NUMBER',
                'display_value' => 'سعر التمديدات الصحية',
                'value' => '0',
                'hidden' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-02-22 10:10:10',
                'updated_at' => '2021-02-22 10:10:10',
            ),
            5 =>
            array(
                'id' => 6,
                'key_cd' => 'NORMAL_PAIN',
                'type' => 'NUMBER',
                'display_value' => 'سعر الدهان العادي',
                'value' => '0',
                'hidden' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-02-22 10:10:10',
                'updated_at' => '2021-02-22 10:10:10',
            ),
            6 =>
            array(
                'id' => 7,
                'key_cd' => 'DECOR_PAIN',
                'type' => 'NUMBER',
                'display_value' => 'سعر الدهان بالديكورات',
                'value' => '0',
                'hidden' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-02-22 10:10:10',
                'updated_at' => '2021-02-22 10:10:10',
            ),
            7 =>
            array(
                'id' => 8,
                'key_cd' => 'FLAGSTONE_ES',
                'type' => 'NUMBER',
                'display_value' => 'سعر متر البلاط الاسباني',
                'value' => '0',
                'hidden' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-02-22 10:10:10',
                'updated_at' => '2021-02-22 10:10:10',
            ),
            8 =>
            array(
                'id' => 9,
                'key_cd' => 'FLAGSTONE_EG',
                'type' => 'NUMBER',
                'display_value' => 'سعر متر البلاط المصري',
                'value' => '0',
                'hidden' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-02-22 10:10:10',
                'updated_at' => '2021-02-22 10:10:10',
            ),
            9 =>
            array(
                'id' => 10,
                'key_cd' => 'FLAGSTONE_ET',
                'type' => 'NUMBER',
                'display_value' => 'سعر متر البلاط الايطالي',
                'value' => '0',
                'hidden' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-02-22 10:10:10',
                'updated_at' => '2021-02-22 10:10:10',
            ),
            10 =>
            array(
                'id' => 11,
                'key_cd' => 'FLAGSTONE_CH',
                'type' => 'NUMBER',
                'display_value' => 'سعر متر البلاط الايطالي',
                'value' => '0',
                'hidden' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-02-22 10:10:10',
                'updated_at' => '2021-02-22 10:10:10',
            ),
            11 =>
            array(
                'id' => 12,
                'key_cd' => 'FLAGSTONE_IN',
                'type' => 'NUMBER',
                'display_value' => 'سعر متر البلاط الهندي',
                'value' => '0',
                'hidden' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-02-22 10:10:10',
                'updated_at' => '2021-02-22 10:10:10',
            ),
            12 =>
            array(
                'id' => 13,
                'key_cd' => 'DOOR_NORMAL',
                'type' => 'NUMBER',
                'display_value' => 'عدد الابواب للبيت المستقل',
                'value' => '0',
                'hidden' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-02-22 10:10:10',
                'updated_at' => '2021-02-22 10:10:10',
            ),
            13 =>
            array(
                'id' => 14,
                'key_cd' => 'WINDOW',
                'type' => 'NUMBER',
                'display_value' => 'عدد الشبابيك لكل مئة متر',
                'value' => '0',
                'hidden' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-02-22 10:10:10',
                'updated_at' => '2021-02-22 10:10:10',
            ),
            14 =>
            array(
                'id' => 15,
                'key_cd' => 'WINDOW_PP',
                'type' => 'NUMBER',
                'display_value' => 'سعر متر الالمنيوم',
                'value' => '0',
                'hidden' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-02-22 10:10:10',
                'updated_at' => '2021-02-22 10:10:10',
            ),
            15 =>
            array(
                'id' => 16,
                'key_cd' => 'FLOOR',
                'type' => 'NUMBER',
                'display_value' => 'سعر الباب الواحد',
                'value' => '0',
                'hidden' => 0,
                'deleted_at' => NULL,
                'created_at' => '2021-02-22 10:10:10',
                'updated_at' => '2021-02-22 10:10:10',
            ),

        ));
    }
}
