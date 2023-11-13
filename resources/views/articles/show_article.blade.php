<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7" rel="stylesheet">
    <title>글 확인하기</title>
</head>

<body class="font-sans bg-gray-100">

    @extends('layouts.menuNavigation')

    @section('content')
    <!-- 페이지 내용 작성 -->
    <div class="comment-container flex flex-col items-end">
        <hr class="border-t-2 my-4">
        <h4 class="mb-2">댓글등록</h4>
        <form action="/articles/{{$article->id}}/comments" method="post">
            @csrf
            <div>
                <textarea name="content" id="" cols="30" rows="1"
                    class="w-full p-2 border rounded"></textarea>
            </div>
            <input type="submit" value="등록"
                class="mt-2 px-4 py-2 text-white bg-blue-500 rounded cursor-pointer hover:bg-blue-600 transition duration-300">
        </form>
    </div>

    <div class="container max-w-2xl mx-auto p-8 bg-white shadow-md rounded-lg my-8">
        <div class="content title text-3xl font-bold mb-4">
            제목 : {{$article->title}}
        </div>
        <hr class="border-t-2 my-4">

        <div class="content info text-lg mb-4">
            지역 : {{$article->region}}
        </div>
        <hr class="border-t-2 my-4">

        <div class="content info text-lg mb-4">
            작성자 : {{$article->user_id}}
        </div>
        <hr class="border-t-2 my-4">

        <div class="content info text-lg mb-4">
            인원수 : {{$article->numberPeople}}
        </div>
        <hr class="border-t-2 my-4">

        <div class="content info text-lg mb-4">
            출발날짜 : {{$article->startDay }}
        </div>
        <hr class="border-t-2 my-4">

        <div class="content info text-lg mb-4">
            돌아오는 날짜 : {{$article->returnDay }}
        </div>
        <hr class="border-t-2 my-4">

        <div class="content info mb-4">
            내용 : <textarea rows="5" readonly
                class="w-full p-2 border rounded content-textarea">{{$article->content}}</textarea>
        </div>

        <hr class="border-t-2 my-4">

        <div class="content info text-lg mb-4">
            생성일 : {{$article->created_at}}
        </div>

        <div class="flex justify-end mt-4 space-x-2">
            <form action="/articles/{{$article->id}}/edit" method="get">
                <button type="submit"
                    class="px-4 py-2 text-white bg-blue-500 rounded cursor-pointer hover:bg-blue-600 transition duration-300">
                    수정
                </button>
            </form>

            <form onsubmit='return confirm("정말 삭제 할꺼?")' action="/articles/{{$article->id}}" method="post">
                @csrf
                @method("delete")
                <button type="submit"
                    class="px-4 py-2 text-white bg-red-500 rounded cursor-pointer hover:bg-red-600 transition duration-300">
                    삭제
                </button>
            </form>

            <a href="/articles"
                class="px-4 py-2 text-blue-500 border border-blue-500 rounded cursor-pointer hover:bg-blue-500 hover:text-white transition duration-300">
                돌아가기
            </a>
        </div>
    </div> <!-- .container -->
    @endsection
</body>

</html>
