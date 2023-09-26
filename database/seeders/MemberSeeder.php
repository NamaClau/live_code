<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::insert([
            [
                'platform_name' => 'Joinprop',
                'company_name'  => 'PT. Dasa Teknologi Bersama',
                'link_website'  => 'https://joinprop.id',
                'link_socmed'   => 'https://www.instagram.com/joinprop/',
                'images'        => 'https://www.joinprop.id/Assets/Logo/joinprop_biru.png',
                'ojk_license'   => '1',
                'verified'      => '1',
                'status'        => '1',
                'opening_date'  => '2023-12-20',
            ],
            [
                'platform_name' => 'Google',
                'company_name'  => 'PT. Google Jaya Jaya',
                'link_website'  => 'https://www.google.com',
                'link_socmed'   => 'https://www.instagram.com/google/',
                'images'        => 'https://blog.hubspot.com/hubfs/image8-2.jpg',
                'ojk_license'   => '0',
                'verified'      => '1',
                'status'        => '1',
                'opening_date'  => '2022-04-25',
            ],
            [
                'platform_name' => 'Twitter',
                'company_name'  => 'PT. Twitter Cit Cuit',
                'link_website'  => 'https://www.x.com',
                'link_socmed'   => 'https://www.instagram.com/twitter/',
                'images'        => 'https://akcdn.detik.net.id/visual/2023/07/24/logo-twitter-terbaru_169.jpeg?w=480&q=90',
                'ojk_license'   => '0',
                'verified'      => '0',
                'status'        => '1',
                'opening_date'  => '2019-01-01',
            ],
            [
                'platform_name' => 'Youtube',
                'company_name'  => 'PT. Youtube Nonton Bersama',
                'link_website'  => 'https://youtube.com',
                'link_socmed'   => 'https://www.instagram.com/youtube/',
                'images'        => 'https://i0.wp.com/www.dafontfree.io/wp-content/uploads/2021/08/Youtube-Logo-Font-3.jpg?fit=900%2C550&ssl=1',
                'ojk_license'   => '1',
                'verified'      => '0',
                'status'        => '0',
                'opening_date'  => '2018-02-12',
            ],
        ]);
    }
}
