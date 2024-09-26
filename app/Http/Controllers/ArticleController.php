<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//ArticleController.phpからArticle.phpの処理が呼び出せるよう、use宣言をする
use App\Models\Article;

class ArticleController extends Controller
{
    public function showlist(){
        //いきなりArticle.phpのメソッドが使えるわけではないため、一度インスタンスを生成してからアローで呼び出す
        $model = new Article();
        $articles = $model->getList();

        return view('list',['articles => $articles']);
    }
}
