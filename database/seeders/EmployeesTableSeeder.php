<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employees')->delete();
        
        \DB::table('employees')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_office' => 2,
                'name' => 'FARIZ',
                'email' => 'farizredzuan@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 02:49:52',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'id_office' => 4,
                'name' => 'AKIM',
                'email' => 'akim@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 02:50:14',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'id_office' => 1,
                'name' => 'IQMAL',
                'email' => 'iqmal@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 02:50:32',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'id_office' => 3,
                'name' => 'AKMAL',
                'email' => 'akmal@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 02:50:50',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'id_office' => 6,
                'name' => 'FATIN',
                'email' => 'fatin@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 02:51:05',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'id_office' => 5,
                'name' => 'TIQA',
                'email' => 'tiqa@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 02:51:31',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'id_office' => 6,
                'name' => 'FATINI',
                'email' => 'fatini@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 02:51:47',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'id_office' => 5,
                'name' => 'DINI',
                'email' => 'dini@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 02:52:05',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'id_office' => 2,
                'name' => 'HAIKAL',
                'email' => 'haiqal@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 02:52:22',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'id_office' => 3,
                'name' => 'FADH',
                'email' => 'fadh@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 02:52:41',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'id_office' => 5,
                'name' => 'FIRDAUS',
                'email' => 'firdaus@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 13:23:15',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'id_office' => 2,
                'name' => 'FARHANA',
                'email' => 'farhana@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 13:23:35',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'id_office' => 6,
                'name' => 'WAN',
                'email' => 'wan@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 13:23:51',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'id_office' => 1,
                'name' => 'ACAP',
                'email' => 'acap@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 13:24:04',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'id_office' => 5,
                'name' => 'MEOR',
                'email' => 'meor@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 13:24:18',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'id_office' => 3,
                'name' => 'FIKRI',
                'email' => 'fikri@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 13:24:38',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'id_office' => 1,
                'name' => 'HAFIZ',
                'email' => 'hafiz@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2021-07-08 13:24:57',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'id_office' => 3,
                'name' => 'NASSAIE',
                'email' => 'nassaie@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 13:25:13',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'id_office' => 5,
                'name' => 'AIMAN',
                'email' => 'aiman@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 13:25:35',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'id_office' => 2,
                'name' => 'LISA',
                'email' => 'lisa@gmail.com',
                'is_active' => '1',
                'deleted_at' => NULL,
                'created_at' => '2022-07-08 13:26:00',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}