<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function __construct()
    {
        // echo "string";exit;
        $this->middleware('auth:api');
    }
    public function menus(Request $request)
    {
        $data = DB::table('t_menu')->get();
        foreach ($data as $indexdetail => $valuedetail) {

            $fieldvalue['id_menu'] = $valuedetail->idmenu;
            $fieldvalue['menu_name'] = $valuedetail->menu;
            $fieldvalue['menu_page'] = $valuedetail->link;
            $fieldvalue['menu_icon'] = $valuedetail->icon;
        }
        return response()->json([
            'status' => 'success',
            "message" => $fieldvalue,
        ]);

    }
}
