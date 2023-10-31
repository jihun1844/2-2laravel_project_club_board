<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>수정</title>

<style>
  .container {
      max-width: 600px;
      margin: auto;
      padding: 20px;
      background-color: #f2f2f2; /* 배경색 변경 */
      border-radius: 5px;
  }

  label {
      display: block;
  }

  input[type="text"],
  textarea {
      width: 100%;
      padding: 10px;
      border-radius: 3px; /* 입력란 테두리를 부드럽게 만들기 위해 추가 */
  }

  input[readonly] {
    background-color:#e9ecef ; /* 읽기 전용 입력란 배경색 변경 */
    cursor:not-allowed ; /* 커서 모양 변경 */
  }

  input[type="submit"] {
    display:block ;
    width :fit-content ; 
    margin-left:auto ;
    margin-right:auto ;
    padding :10px ; 
    border-radius :3px ; 
    background-color :#007bff ; 
    color:#fff ;
    border:none ;
  }
</style>

</head>
<body >
<div class="container">

<form action="/articles/{{$article->id}}" method="POST">
@csrf
@method("put")
  <input type="text" name="hello" value="hi">

  <div class = "form-group"> 
    <label>제목:</label><input type ="text" name ="title" value="{{$article->title}}"/>
  </div>

  <div class = "form-group"> 
    <label>작성자:</label><input readonly type ="text" value="{{$article->user_id}}"/>
  </div>

  <div class = "form-group"> 
    <label>지역:</label><input name="region" type ="text" value="{{$article->region}}"/>
  </div>

  <div class = "form-group"> 
    <label>인원수:</label><input name="numberPeople" type ="text" value="{{$article->numberPeople}}"/>
  </div>

  <div class = "form-group"> 
    <label>출발 날짜:</label><input name="startDay" type ="date" value="{{$article->startDay}}"/>
  </div>

  <div class = "form-group"> 
    <label>돌아오는 날짜:</label><input name="returnDay" type ="date" value="{{$article->returnDay}}"/>
  </div>

  <div class = "form-group"> 
    <label>내용:</label><textarea name ="content">{{$article->content}}</textarea>
  </div>

  <div class = "form-group"> 
  <label>생성일:</label><input readonly type ="text" value="{{$article->created_at}}"/>
  </div>

  <div class = "form-group"> 
  <label>수정일:</label><input readonly type ="text" value="{{$article->updated_at}}"/>
  </div>

<div class = "form-group"> 
<input type ="submit" value ="수정"/>
</div>


 </form>


 </div> <!-- .container -->



 </body>
 </html>


