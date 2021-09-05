<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
    body {
      font-size:16px;
      margin: 5px;
      background-color: #191970;
    }
    .content { 
      width: 70%; 
      margin: 100px auto 0;
      

    }
    .content1{
      width: 70%;
      height: 200px;
      background: #fff;
      border-radius: 30px;

    }
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    <div class="content">
    @yield('content')
    </div>
</body>
</html>