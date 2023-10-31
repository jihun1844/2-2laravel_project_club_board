<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>글 리스트</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
    }
    
    .table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .table thead tr {
      background-color: #f1f1f1;
    }
    
    .table th,
    .table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
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
  </style>
</head>
<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">글 번호</th>
        <th scope="col">제목</th>
        <th scope="col">작성자</th>
        <th scope="col">모이는 날</th>
      </tr>
    </thead>
    <tbody>
      @foreach($articles as $article)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td><a href="/articles/{{$article->id}}">{{$article->title}}</a></td>
        <td>{{$article->user_id}}</td>
        <td>{{$article->startDay}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  @if(Auth::check())
    <button class="button"><a href="/articles/create">글쓰기</a></button>
  @else
    <button class="button"><a href="login">로그인후 글쓰러 가기</a></button>
  @endif
  
  <button class="button"><a href="/">HOME으로 가기</a></button>
</body>
</html>
