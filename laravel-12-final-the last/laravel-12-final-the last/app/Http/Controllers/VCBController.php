<?php

namespace App\Http\Controllers;

use App\Models\ThongTinGiaoDich;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class VCBController extends Controller
{
    public function index()
    {
        $client     = new Client([
            'headers' => ['Content-Type' => 'application/json' ]
        ]);
        $res        =   $client->post('http://103.137.185.71:27120', [
                            'body'  => json_encode([
                                "begin"             =>  "06/07/2023",
                                "end"               =>  "06/07/2023",
                                "username"          =>  "0702342484",
                                "password"          =>  "Nha@010502",
                                "accountNumber"     =>  "1023623262"
                            ])
                        ]);
        $ket_qua    = json_decode($res->getBody()->getContents(), true);
        if($ket_qua['success'] == true) {
            $result     = $ket_qua['results'];
            foreach($result as $key => $value) {
                $check      = ThongTinGiaoDich::where('Reference', $value['Reference'])->first();
                if(!$check) {
                    ThongTinGiaoDich::create([
                        'Reference'         =>  $value['Reference'],
                        'Description'       =>  $value['Description'],
                        'Amount'            =>  intval($value['Amount']),
                    ]);
                }
            }
        }
    }
}
