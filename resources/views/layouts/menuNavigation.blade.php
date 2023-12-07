<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Gaegu&family=Gamja+Flower&family=Poor+Story&family=Single+Day&display=swap');
    div{
      font-size: 30px;
      font-family: 'Gamja Flower', sans-serif;
    }
    

    .imgA {
      display: inline-block;
      overflow: hidden;
      border-radius: 50%; /* 동그랗게 만들기 */
    }

    img {
      width: 60px;
      height: auto;
      display: block;
    }
    .flex-container {
      display: flex;
      align-items: center;
    }

    .nav-title {
      margin-left: 10px;
      font-size: 2.8rem;
      
    }
  </style>
  <title>메뉴바</title>
  <!-- 테일윈드 CDN 추가 -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">
  <nav class="p-4 bg-blue-400 text-white rounded-lg">
    <div class="container mx-auto flex justify-between items-center">
      <div class="flex-container">
        <a href="/" class="imgA">
          <img src="https://img.freepik.com/premium-vector/bicycle-logo-icon-design_586739-5374.jpg?w=1060">
        </a>
        <p class="nav-title">
          Wheel Wanderers
        </p>
      </div>

      <ul class="flex space-x-12" class="text">
        @if(auth()->check() && auth()->user()->id == 1)
          <li><p>Admin account</p></li>
        @else
          <li></li>
        @endif
        <li><a href="/" class="hover:text-gray-300 transition duration-300"> ⧫홈</a></li>
        
        
        <li><a href="/articles" class="hover:text-gray-300 transition duration-300">♣모집 글 보러가기</a></li>
        
        @if(Auth::check())
          <li><a href="/articles/create" class="hover:text-gray-300 transition duration-300">♠글쓰기</a></li>
        @else
          <li><a href="login" onclick="return confirm('로그인 후 이용 가능한 서비스 입니다.  로그인 페이지로 이동합니다')" class="hover:text-gray-300 transition duration-300">♠글쓰기</a></li>
        @endif


        @if(Auth::check())
          <li><a href="myPage" class="hover:text-gray-300 transition duration-300">♥내가 쓴 글 보러가기</a></li>
        @else
          <li><a href="login" onclick="return confirm('로그인 후 이용 가능한 서비스 입니다.  로그인 페이지로 이동합니다')" class="hover:text-gray-300 transition duration-300">♥Mypage</a></li>
        @endif

        
        
        @if(Auth::check())
          <li><a href="{{ route('logout') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Log out</a></li>
        @else
          <li> <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Log in</a></li>
        @endif
      
      </ul>
    </div>
  </nav>

  @yield('content')
</body>
</html>
