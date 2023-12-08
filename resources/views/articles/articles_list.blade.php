<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>글 리스트</title>
  <style>
    @font-face {
    
      src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2302@1.0/KCCMurukmuruk.woff2') format('woff2');
      font-weight: normal;
      font-style: normal;
    }
    body {
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
      
      
    }
    
    .table {
      width: 100%;
      max-width: 80%;
      margin: 0 auto;
      margin-top: 4%;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    
    .table thead tr {
      background-color: #f1f1f1;
    }
    
    .table th,  
    .table td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      font-size: 20px;
      font-family: 'KCCMurukmuruk';
      
    }
    .table th{ /* 글번호, 제목, 작성자 등 라인 */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 그림자 추가
      margin: 8px; /* 간격을 벌림 */}

    .tdbody{  /* 글의 내용(1줄 전체) 라인 */
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 그림자 추가
      margin: 8px; /* 간격을 벌림 */
    }
    
    .table a {
      color: #333;
      text-decoration: none;
    }
    
    .button {
      display: inline-block;
      margin-right: 10px;
      padding: 10px 20px;
      background-color: #9bc5f3;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
    }
    
    .button:hover {
      background-color: #0056b3;
    }

    .pagination-container {
    margin-top: 20px; /* */
    margin-right: 47%;
    }
  </style>
  
</head>
<body >
  <div class="menu">
    {{-- 메뉴바 --}}
    @extends('layouts.menuNavigation') 
    @section('content')
    {{-- @section('content') 이것들 사이에 내용(body) 적어야 함   @endsection --}}
  </div>
  

  <table class="table">
    <thead>
      <tr>
        <th scope="col">지역</th>
        <th scope="col">제목</th>
        <th scope="col">작성자</th>
        <th scope="col">인원수</th>
        <th scope="col">모이는 날</th>
      </tr>
    </thead>
    <tbody>
      @foreach($articles as $article)
      <tr class="tdbody">
        <td>{{$article->region}}</td>
        <td><a href="/articles/{{$article->id}}">{{$article->title}}</a></td>
        <td>{{$article->user->name}}</td>
        <td>{{$article->numberPeople}}</td>
        <td>{{$article->startDay}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="pagination-container text-center">
    <!-- 페이지네이션 링크 표시 -->
    {{ $articles->links() }}
  </div>
  
  
  @endsection
</body>
</html>
