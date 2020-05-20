<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * ユーザーの秘密のメッセージを保存
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function storeSecret(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // encryptヘルパで暗号化できる
        $user->fill([
            'secret' => encrypt($request->secret),
        ])->save();
    }
}
