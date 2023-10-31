<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>게시글 등록</title>

  <!-- Tailwind CSS 라이브러리 추가 -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
<div class="container mx-auto p-4">

<h1 class="text-center text-3xl font-bold mb-8">글쓰기</h1>

<form action="/articles" method="post">
@csrf

    <div class="mb-4">
    <label class="block font-semibold mb-2" for="name">제목:</label>
    <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" type="text" name="title" required>
    </div>

    <div class="mb-4"> 
    <label class="block font-semibold mb-2">지역:</label>
    <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" type="text" name="region" required>
    </div>

    <div class="mb-4"> 
        <label class="block font-semibold mb-2">인원수:</label>
        <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" type="text" name="numberPeople" required>
    </div>

    <div class="mb-4"> 
        <label class="block font-semibold mb-2">출발 날짜:</label>
        <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" type="date" name="startDay" required>
    </div>

    <div class="mb-4"> 
        <label class="block font-semibold mb-2">돌아오는 날짜:</label>
        <input class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" type="date" name="returnDay" required>
    </div>

    <div class="mb-4"> 
    <label class="block font-semibold mb-2">내용:</label>
    <textarea style="border: 3px solid" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" name="content" rows="7" required></textarea>
    </div>



    <button class="w-full bg-blue-500 text-white py-2 px-4 rounded-md font-semibold" type="submit">등록</button>
</form>

</div> 
</body>
</html>
