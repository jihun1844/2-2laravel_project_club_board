<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $article_id)
    {
        //$request에서 content를 추출하고 comments테이블에 하나의 레코드로 삽입
        $content = $request->content;

        if (empty(trim($content))) {
            // 빈칸일 경우 알림 추가하고 이전 페이지로 리다이렉트
            
            return redirect()->back()->with('error', '댓글을 입력하세요.');
        }

        $user_name = auth()->user()->name;
        $user_id = auth()->user()->id;
        // Eloquent Model을 이용해 db에 삽입하는 방법
        // 1. Comment 객체 생성후, save 메서드 호출
        // 2. Comments::create 메서드 호출, 
        //         대량 할당을 위해 $fillable 프리퍼티 또는 $guarded정의 필요

        Comment::create([
            'content' => $content,
            'user_name' => $user_name,
            'user_id' => $user_id,
            'article_id' => $article_id
        ]);

        //게시글 상세보기 페이지 뷰로 redirection
        return redirect('/articles/' .$article_id);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($article_id, $comment_id)
    {
        $comment = Comment::findOrFail($comment_id);

        // 현재 로그인한 사용자와 댓글을 작성한 사용자가 같은지 확인
        if(auth()->user()->id == $comment->user_id) {
            $comment->delete();
            // 삭제 후 어떤 처리를 하고 싶다면 여기에 추가
            return redirect('/articles/' . $article_id)->with('success', '댓글이 삭제되었습니다.');
        } else {
            // 권한이 없을 경우 처리 (예: 에러 메시지 출력)
            return redirect('/articles/' . $article_id)->with('error', '댓글을 삭제할 권한이 없습니다.');
        }
    }
}
