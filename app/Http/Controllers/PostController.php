<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;

class PostController extends Controller
{
    /**
     * 新ブログポスト作成フォームの表示
     *
     * @return Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * 新しいブログポストの保存
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(StoreBlogPost $request)
    {
        $validated = $request->validated();
        return(true);
    }

    public function comment ()
    {
        return view('post.comment');
    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'body.required'  => 'A message is required',
        ];
    }
}
