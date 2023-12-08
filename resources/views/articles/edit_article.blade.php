<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>수정</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gaegu&family=Gamja+Flower&display=swap');
        div{
            font-family: 'Gaegu', sans-serif;
            font-family: 'Gamja Flower', sans-serif;
            font-size: 25px
        }
        input {
        border: 1px solid rgb(30, 255, 180); /* 파란색 테두리 추가 */
        }

    </style>
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
                <input readonly type="text" value="{{$article->user->name}}" class="w-full p-2 rounded border bg-gray-300 cursor-not-allowed">
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

            {{-- 빈칸으로 댓글 작성시 애러 --}}
        @if(session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @endif

            

            <div class="container mx-auto p-4 lg:max-w-lg text-center">
                <input type="submit" value="수정" class="px-4 py-2 text-white bg-blue-500 rounded cursor-pointer hover:bg-blue-600 transition duration-300">
            </div>

        </form>

    </div>
</body>

</html>
