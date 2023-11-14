<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>수정</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">

    <div class="container mx-auto p-4 md:w-1/2 ">

        <form action="/articles/{{$article->id}}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            @method("put")

            <div class="mb-4">
                <label class="block">제목:</label>
                <input type="text" name="title" value="{{$article->title}}" class="w-full p-2 rounded border">
            </div>

            <div class="mb-4">
                <label class="block">작성자:</label>
                <input readonly type="text" value="{{$article->user_id}}" class="w-full p-2 rounded border bg-gray-300 cursor-not-allowed">
            </div>

            <div class="mb-4">
                <label class="block">지역:</label>
                <input name="region" type="text" value="{{$article->region}}" class="w-full p-2 rounded border">
            </div>

            <div class="mb-4">
                <label class="block">인원수:</label>
                <input name="numberPeople" type="text" value="{{$article->numberPeople}}" class="w-full p-2 rounded border">
            </div>

            <div class="mb-4">
                <label class="block">출발 날짜:</label>
                <input name="startDay" type="date" value="{{$article->startDay}}" class="w-full p-2 rounded border">
            </div>

            <div class="mb-4">
                <label class="block">돌아오는 날짜:</label>
                <input name="returnDay" type="date" value="{{$article->returnDay}}" class="w-full p-2 rounded border">
            </div>

            <div class="mb-4">
                <label class="block">내용:</label>
                <textarea name="content" class="w-full p-2 rounded border">{{$article->content}}</textarea>
            </div>

            <div class="mb-4">
                <label class="block">생성일:</label>
                <input readonly type="text" value="{{$article->created_at}}" class="w-full p-2 rounded border bg-gray-300 cursor-not-allowed">
            </div>

            <div class="mb-4">
                <label class="block">수정일:</label>
                <input readonly type="text" value="{{$article->updated_at}}" class="w-full p-2 rounded border bg-gray-300 cursor-not-allowed">
            </div>

            <div class="container mx-auto p-4 lg:max-w-lg text-center">
                <input type="submit" value="수정" class="px-4 py-2 text-white bg-blue-500 rounded cursor-pointer hover:bg-blue-600 transition duration-300">
            </div>

        </form>

    </div>
    <!-- .container -->

</body>

</html>
