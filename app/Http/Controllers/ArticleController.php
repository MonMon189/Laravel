<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

/* use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator; */

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    
    {
        $articles = Article::all(); //paginate(5)
        return view('index', compact('articles'))/* ->with('i',(request()->input('page', 1) -1) *5) */;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store (Request $request)
    {
        Article::create($request->all());
        return redirect()->route('article.index')->with('thong bao', 'Đã tạo bài viết mới thành công');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());
        return redirect()->route('article.index')->with('thongbao', 'Đã update thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
     {
        $article->delete();
        return redirect()->route('article.index')->with('thongbao', 'Đã xóa thành công!');
    } 
    
    /* public function destroy($id)

    {
    // Lấy đối tượng cần xóa dựa trên ID
    $article = Article::findOrFail($id);
    
    // Xóa đối tượng
    $article->delete();
    
    // Chuyển hướng về trang danh sách bài viết
    return redirect()->route('article.index')->with('thongbao', 'Đã xóa thành công!');
    } */
}
