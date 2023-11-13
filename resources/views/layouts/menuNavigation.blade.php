<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>메뉴바</title>
  <!-- 테일윈드 CDN 추가 -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans ">
  <nav class=" p-4 text-white rounded-lg grid grid-cols-3 divide-x"  style="background-color: rgb(135, 206, 250, 0.7);  margin: 0 15%; ">
    <ul class="flex items-center justify-between">
      <li>
        <a href="#" class="text-lg font-semibold">로고</a>
      </li>
      <li class="space-x-4">
        <a href="/" class="hover:text-gray-300 transition duration-300">홈</a>
        @if(Auth::check())
          <a href="/articles/create" class="hover:text-gray-300 transition duration-300">글쓰기</a>
        @else
          
          <a href="login" onclick="return confirm('로그인 후 이용 가능한 서비스 입니다.  로그인 페이지로 이동합니다')" class="hover:text-gray-300 transition duration-300">글쓰기</a>
        @endif
        
        <a href="#" class="hover:text-gray-300 transition duration-300">포트폴리오</a>
        <a href="#" class="hover:text-gray-300 transition duration-300">문의</a>
      </li>
    </ul>
  </nav>

  @yield('content')
</body>
</html>
