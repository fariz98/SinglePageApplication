<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfficeEmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('office_employees')->delete();
        
        \DB::table('office_employees')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_office' => 1,
                'office_name' => 'HITACHI',
                'address' => 'PETALING JAYA',
                'state' => 'SELANGOR',
                'country' => 'MALAYSIA',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 02:47:25',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'id_office' => 2,
                'office_name' => 'DELL',
                'address' => 'BAYAN LEPAS',
                'state' => 'PENANG',
                'country' => 'MALAYSIA',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 02:47:49',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'id_office' => 3,
                'office_name' => 'INTEL',
                'address' => 'CYBERJAYA',
                'state' => 'SELANGOR',
                'country' => 'MALAYSIA',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 02:48:07',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'id_office' => 4,
                'office_name' => 'GOOGEL',
                'address' => 'KL SENTRAL',
                'state' => 'KUALA LUMPUR',
                'country' => 'MALAYSIA',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 02:48:29',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'id_office' => 5,
                'office_name' => 'MAYBANK',
                'address' => 'PUCHONG',
                'state' => 'SELANGOR',
                'country' => 'MALAYSIA',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 02:48:55',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'id_office' => 6,
                'office_name' => 'PETRONAS',
                'address' => 'KUANTAN',
                'state' => 'PAHANG',
                'country' => 'MALAYSIA',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 02:49:19',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}