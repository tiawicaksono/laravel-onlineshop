<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ShowUser()
    {
        return view('admin/user');
    }
    public function listUser(Request $request)
    {
        $approval = $request->chooseValidasi;
        $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
        $rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
        $sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id';
        $order = isset($_POST['order']) ? strval($_POST['order']) : 'asc';
        $offset = ($page - 1) * $rows;

        $count = User::count();
        $dataUser = User::orderBy($sort, $order)
            ->limit($rows)
            ->skip($offset);
        if (isset($approval)) {
            $dataUser->where('approval', $approval);
        }
        $result = $dataUser->get();
        $dataJson = array();
        foreach ($result as $value) {
            $dataJson[] = array(
                "id" => $value->id,
                "approve" => $value->id,
                "name" => $value->name,
                "email" => $value->email
            );
        }
        $arData =  array(
            'total' => $count,
            'rows' => $dataJson
        );
        return response()->json($arData);
    }

    public function ApproveUser(Request $request)
    {
        $user = User::find($request->id);
        $user->approval = $request->kondisi;
        $user->save();
    }

    public function ApproveUserChecked(Request $request)
    {
        $idArray = $request->idArray;
        foreach ($idArray as $key => $id) :
            $user = User::find($id);
            $user->approval = $request->kondisi;
            $user->save();
        endforeach;
    }
}
