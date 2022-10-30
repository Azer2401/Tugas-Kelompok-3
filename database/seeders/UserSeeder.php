<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['name'] = 'Binu Binusian';
        $inputan['email'] = 'binusian@gmail.com';//ganti pake emailmu
        $inputan['password'] = Hash::make('123456');//passwordnya 123258
        $inputan['phone'] = '085852527575';
        $inputan['alamat'] = 'jalan Inaja dulu';
        $inputan['role'] = 'admin';//kita akan membuat akun atau users in dengan role admin
        User::create($inputan);
    }
}
