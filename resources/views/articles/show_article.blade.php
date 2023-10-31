<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7" rel="stylesheet">
  <title>글 확인하기</title>
  
<style>
  .container {
      max-width: 800px;
      margin: auto;
      padding: 20px;
  }

  .content {
      margin-bottom: 20px;
  }

  .title {
      font-size: 24px;
      font-weight: bold;
  }

  .info {
      font-size: 16px;
  }

  .author {
      color: #666666;
  }

  .date {
      color: #999999;
  }


  .button-container form,
  .button-container a {
    display:inline-block; /* 버튼들을 가로로 나열 */
    margin-right :10px; /* 버튼 사이의 간격 조정 */
  }

  .divider-line {
      border-top: 1px solid black; /* 검은 실선 */
  }
  .content-textarea { /* 내용(content) 칸 스타일 */
    width :100%;
    height :200px; /* 원하는 높이로 조정 */
    padding :10px; 
    resize :none; /* 크기 조절 비활성화 */
  }
  .comment-container {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
  }

  .comment-container form {
    margin-top: 10px;
  }
  .comment-container{
    float: right;
  }
 
  
</style>

</head>
<body>
  <div class="comment-container">
    <hr>
    <h4>댓글등록</h4>
    <form action="/articles/{{$article->id}}/comments" method="post">
      @csrf
      <div>
        <textarea name="content" id="" cols="30" rows="1"></textarea>
      </div>
      <input type="submit" value="등록">
      
    </form>
  </div>

  <div class="container">
    <div class="content title">
      제목 : {{$article->title}}
    </div>
    <hr class = "divider-line"> <!-- 구역을 나누는 검은 실선 -->

    <div class = "content info"> 
      지역 : {{$article->region}}
    </div>
    <hr class = "divider-line"> <!-- 구역을 나누는 검은 실선 -->

    <div class = "content info"> 
      작성자 : {{$article->user_id}}
    </div>
    <hr class = "divider-line"> <!-- 구역을 나누는 검은 실선 -->

    <div class = "content info"> 
      인원수 : {{$article->numberPeople}}
    </div>
    <hr class = "divider-line"> <!-- 구역을 나누는 검은 실선 -->

    <div class = "content info"> 
      출발날짜 : {{$article->startDay }}
    </div>
    <hr class = "divider-line"> <!-- 구역을 나누는 검은 실선 -->

    <div class = "content info"> 
      돌아오는 날짜 : {{$article->returnDay }}
    </div>
    <hr class = "divider-line"> <!-- 구역을 나누는 검은 실선 -->

    <div class = "content info"> 
      내용 : 
      <textarea rows = "5" readonly class ="content-textarea">{{$article->content}}</textarea>
    </div>

    <hr class = "divider-line"> <!-- 구역을 나누는 검은 실선 -->

    <div class = "content info"> 
      생성일 : {{$article->created_at}}
    </div>


    <form action="/articles/{{$article->id}}/edit" method="get" class= "button-container">
      <input type ="submit" value ="수정"/>
    </form>

    <form onsubmit='return confirm("정말 삭제 할꺼?")' action="/articles/{{$article->id}}" method ="post" class= "button-container">
      @csrf
      @method("delete")
      <input type ="submit" value ="삭제"/>

      <a href="/articles">돌아가기 </a>
    </form>
 </div> <!-- .container -->

 
  

 </body>
 </html>


