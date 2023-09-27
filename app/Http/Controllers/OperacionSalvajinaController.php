<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionSalvajinaController extends Controller
{
    public function indexAction(Request $request)
    {
        if ($request->date == '07/09/2023') {

            $data = [
                "afluenteCvc" => 1100.55,
                "afluenteCelsia" => 1100.22,
                "tributario" => 1112.25,
                "maxLevel" => 1110.22,
                "minLevel" => 1100.44,
                "effluentMax" => 1100.22,
                "effluentMin" => 1110,
            ];
            $response = [
                "code" => 200,
                "message" => "Hay datos",
                "data" => $data
            ];

            return response()->json($response, $response['code']);
        } else {
            $response = [
                "code" => 404,
                "message" => "Hay datos"
            ];
            return response()->json($response, 200);
        }
    }

    public function flowRecords(Request $request)
    {
        if ($request->date == '07/09/2023') {
            $data = [
                "turbinedWaterFlow" => [
                    [
                        'id1' => '22.55', 'id2' => '22.55', 'id3' => '22.55', 'id4' => '22.55', 'id5' => '22.55', 'id6' => '22.55',
                        'id7' => '22.55', 'id8' => '22.55', 'id9' => '22.55', 'id10' => '22.55', 'id11' => '22.55', 'id12' => '22.55',
                        'id13' => '22.55', 'id14' => '22.55', 'id15' => '22.55', 'id16' => '22.55', 'id17' => '22.55', 'id18' => '22.55',
                        'id19' => '22.55', 'id20' => '22.55', 'id21' => '22.55', 'id22' => '22.55', 'id23' => '22.55', 'id24' => '22.55'
                    ],
                ],
                "suarez" => [
                    [
                        'id1' => '22.55', 'id2' => '22.55', 'id3' => '22.55', 'id4' => '22.55', 'id5' => '22.55', 'id6' => '22.55',
                        'id7' => '22.55', 'id8' => '22.55', 'id9' => '22.55', 'id10' => '22.55', 'id11' => '22.55', 'id12' => '22.55',
                        'id13' => '22.55', 'id14' => '22.55', 'id15' => '22.55', 'id16' => '22.55', 'id17' => '22.55', 'id18' => '22.55',
                        'id19' => '22.55', 'id20' => '22.55', 'id21' => '22.55', 'id22' => '22.55', 'id23' => '22.55', 'id24' => '22.55'
                    ],
                ], "mallarinePier" => [
                    [
                        'id1' => '22.55', 'id2' => '22.55', 'id3' => '22.55', 'id4' => '22.55', 'id5' => '22.55', 'id6' => '22.55',
                        'id7' => '22.55', 'id8' => '22.55', 'id9' => '22.55', 'id10' => '22.55', 'id11' => '22.55', 'id12' => '22.55',
                        'id13' => '22.55', 'id14' => '22.55', 'id15' => '22.55', 'id16' => '22.55', 'id17' => '22.55', 'id18' => '22.55',
                        'id19' => '22.55', 'id20' => '22.55', 'id21' => '22.55', 'id22' => '22.55', 'id23' => '22.55', 'id24' => '22.55'
                    ],
                ]
            ];
            $response = [
                "code" => 200,
                "message" => "Hay datos",
                "data" => $data
            ];
            return response()->json($response, $response['code']);
        } else {
            $response = [
                "code" => 404,
                "message" => "No se encontro datos"
            ];
            return response()->json($response, 200);
        }
    }

    public function get_browser_version(){
        return "Hola Browser";
    }
}
