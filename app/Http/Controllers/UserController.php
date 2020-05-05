<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\User;

class UserController extends Controller
{
    /**
     * ユーザーリポジトリの実装
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * 新しいコントローラインスタンスの生成
     *
     * @param  UserRepository  $users
     * @return void
     *
     * データソースからユーザーを取得する必要があるため、ユーザーを取得できるサービスを注入している
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /**
     * 指定ユーザーのプロフィール表示
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = $this->users->find($id);

        return view('user.profile', ['user' => $user]);
    }
}
