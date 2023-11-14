<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $articles = Article::all();
        // return view('articles.articles_list', ['articles'=>$articles]);

        $articles = Article::orderByDesc('created_at')->get();//날짜순으로 정리

        $count = $articles->count();
        //그렇게 읽어온 레코드들을 뷰페이지에 전달한다
        return view('articles.articles_list', ['articles' => $articles, 'count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $title = $request->title;
        // $content = $request->content;
        // $article = new Article;
        // $article->title = $title;
        // $article->content = $content;
        // $article->user_id = Auth::user()->id; //브리즈로 회원가입,로그인이라
        // $article->save();
        // return redirect('/articles');

        $request->merge(['user_id' => Auth::user()->id]);
        Article::create($request->all());
        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        //전부 같은 아이디를 찾는 코드임
        //$article = Article::find($id); //select *from article where id = $id;
        $article = Article::findOrFail($id);
        //$article = Article::where('id', $id)->first();
        //$article = Article::firstWhere('id', $id);

        $comments = $article->comments;
        ;
        return view('articles.show_article', ['article' => $article], compact('article', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);

        return view('articles.edit_article', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request;
        // $post = Post::find($id);
        // $post->title = $request->title;
        // $post->content = $request->content; //$request->input("content)

        // $post->save(); //새로적을때, 있던것을 변경할때 모두 save

        Article::find($id)->update(['title' => $request->title,
                                    'content' => $request->content,
                                    'region'=>$request->region,
                                    'numberPeople'=>$request->numberPeople,
                                    'startDay'=>$request->startDay,
                                    'returnDay'=>$request->returnDay]);

        return redirect('/articles/' . $id);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //DB posts 테이블에서 id컬럼 값이 $id 컬럼 값이
        Article::destroy($id);

        //posts 리스트 보기
        return redirect('/articles');
    }
}
