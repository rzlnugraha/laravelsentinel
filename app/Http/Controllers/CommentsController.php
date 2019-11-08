<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
Use Validator, Redirect;
use Alert;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $messages = [
            'user.required' => 'Nama anda harus di isi, maenya engga',
            'user.min' => 'Nama antum masa se pendek itu, minimal 4 huruf gan!',
            'content.required' => 'Mau komen apa gan? Jangan kosong'
        ];

        $validate = Validator::make($request->all(), Comment::valid(), $messages);
        if ($validate->fails()) {
            return Redirect::to(route('article.show', $request->article_id))
                ->withErrors($validate)
                ->withInput();
        } else {
            Comment::create($request->all());
            Alert::success('Berhasil menambah komen','Success');
            return Redirect::to(route('article.show', $request->article_id));
        }
    }
}
