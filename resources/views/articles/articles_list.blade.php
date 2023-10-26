<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
  <title>Document</title>
</head>
<style>
 
</style>
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
    {{-- <tbody class="table-group-divider"> --}}
    <tbody >
      @foreach($articles as $article)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td><a href="/articles/{{$article->id}}">{{$article->title}}</a></td>
        <td>{{$article->user_id}}</td>
        {{-- <td>{{$article->created_at}}</td> --}}
      </tr>
      @endforeach
    </tbody>
  </table>
  @if(Auth::check())
  {{-- class="btn btn-outline-primary" --}}
  <button type="button"><a href="/articles/create">글쓰기</a></button>
    
  @else
  {{-- class="btn btn-outline-success" --}}
    <button type="button" ><a href="login">로그인후 글쓰러 가기</a></button>
    
    {{-- 여기로 로그인후 다시 글 리스트로 돌아오는 코드 해야함 --}}
  @endif
  {{-- class="btn btn-outline-success" --}}
  <button type="button" ><a href="/">HOME으로 가기</a></button>
</body>
</html>