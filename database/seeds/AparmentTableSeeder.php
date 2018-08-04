<?php

use Illuminate\Database\Seeder;

class AparmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=>'Thời trang đi biển',
                'address'=>'Thanh Nhan',
                'description'=>'Quần áo đi biển đẹp',
                'infor_detai'=>'Nha dep',
                'image'=>'',
                'status'=>1
            ],
        []
    }
}
