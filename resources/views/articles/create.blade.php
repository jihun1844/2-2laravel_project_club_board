<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>게시글 등록</title>

<style>
    .container {
        max-width: 600px;
        margin: auto;
        padding: 20px;
        background-color: #f2f2f2; /* 배경색 변경 */
        border-radius: 5px;
    }

    h1 {
        text-align: center;
    }

    .form-group {
        margin-bottom: 20px;
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

    button[type="submit"] {
        display: block;
        width: fit-content; /* 버튼 너비를 내용에 맞게 조정 */
        margin-left:auto; /* 가운데 정렬 */
        margin-right:auto; /* 가운데 정렬 */
        padding :10px ; 
        border-radius :3px ; 
        background-color :#007bff ; 
        color:#fff ;
        border:none ;
        cursor:pointer ;
    }
</style>

</head>
<body >
<div class="container">

<h1>글쓰기</h1>

<form action="/articles" method="post">
@csrf

<div class = "form-group">
   <label for ="name">제목:</label>
   <input type ="text" name ="title" required style= "background-color:#ffffff;"> <!-- 입력란 색상 변경 -->
</div>

<div class = "form-group"> 
   <label>지역:</label>
   <input type ="text" name ="region" required style= "background-color:#fff;"> <!-- 입력란 색상 변경 -->
</div>

<div class = "form-group"> 
   <label>내용:</label>
   <textarea name ="content" rows = "5" required style= "background-color:#fff;"></textarea> <!-- 입력란 색상 변경 -->
</div>

<button type = "submit">등록 </button>

{{-- 애러 메세지 띄우기 --}}
{{-- @error('title')
<p class="" style= "color:red">{{$message}}</p >
@enderror --}}

 </form>


 {{-- {{ dd($errors->all()) }} 어떤 애러가 있는지 알려줌--}}
 </div> <!-- .container -->



 </body>
 </html>


