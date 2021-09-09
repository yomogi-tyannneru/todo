<!DOCTYPE html>

<html lang="ja">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>test</title>
<style>
  th {
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
  body {
    font-size:16px;
    margin: 5px;
    background-color: #191970;
  }
  .content { 
    width: 70%; 
    margin: 100px auto 0;
  }

  .btn {
  display: block;
  width: 80px;
  text-align: center;
  text-decoration: none;
  color: #9370DB;
  border:2px solid #9370DB;
  border-radius: 6px;
}
.btn:hover {
  background: #9370DB;
  color: #fff;
}
.card {
  margin: 250px auto 0;
  width: 55%;
  height: 420px;
  background: #fff;
  border-radius: 10px;
      
}

.card__content {
  padding: 30px;
}

.card__content-ttl {
  font-size: 18px;
  margin-bottom: 30px;
  font-weight: 400;
}

.card__content-cat {
  font-size: 24px;
  font-weight: bold;
}

.form{
  width: 60%;
  margin: 20px auto;
}
.form-item {
  padding: 24px 0;
  width: 100%;
  display: flex;
  justify-content: space-between;
}

.form-item-input {
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 10px;
  height: 35px;
  width: 75%;
  font-size: 18px;
}
    
</style>
</head>

<body>
  <div class="card">
    <div class="card__content">
      <div class="card__content-cat">Todo List</div>
      <form action="/create" method="POST">
        <div class="form-item">
          <input type="text" name="contact" class="form-item-input">
          <input type="submit" name="submit" value="追加" class="btn"/>
        </div>
      </form>
    </div>
        <table >
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
          @foreach ($items as $item)
          <tr>
            <td>
              {{$item->id}}
            </td>
            <td>
              {{$item->content}}
            </td>
            <td>
              <button>送信</button>
              <a href="#" class="btn">ボタン</a>
              {{$item->created_at}}
            </td>
            <td>
              {{$item->updated_at}}
            </td>
          </tr>
          @endforeach
        </table>
        <a href="#" class="btn">ボタン</a>

      </div>
    </div>
  </div>







@section('content')
<form action="/create" method="POST">
  <table>
    @csrf
    <tr>
      <th>
        作成日
      </th>
      <td>
        <input type="text" name="content">
      </td>
    </tr>
    <tr>
      <th>
        タスク名
      </th>
      <td>
        <input type="text" name="created_at">
      </td>
    </tr>
    <tr>
      <th>
        更新
      </th>
      <td>
        <input type="text" name="updated_at">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>送信</button>
      </td>
    </tr>
  </table>
</form>
@endsection


@section('content')
<form action="/edit" method="POST">
  <table>
    @csrf
    @foreach ($items as $item)
    <tr>
      <th>
        id
      </th>
      <td>
        <input type="text" name="id" value="{{$item->id}}">
      </td>
    </tr>
    <tr>
      <th>
        name
      </th>
      <td>
        <input type="text" name="content" value="{{$item->content}}">
      </td>
    </tr>
    <tr>
      <th>
        age
      </th>
      <td>
        <input type="text" name="created_at" value="{{$item->created_at}}">
      </td>
    </tr>
    <tr>
      <th>
        nationality
      </th>
      <td>
        <input type="text" name="updated_at" value="{{$item->updated_at}}">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>送信</button>
      </td>
    </tr>
    @endforeach
  </table>
</form>
@endsection

@section('content')
<form action="/delete" method="POST">
  <table>
    @csrf
    @foreach ($items as $item)
    <tr>
      <th>
        id
      </th>
      <td>
        <input type="text" name="id" value="{{$item->id}}">
      </td>
    </tr>
    <tr>
      <th>
        name
      </th>
      <td>
        <input type="text" name="content" value="{{$item->content}}">
      </td>
    </tr>
    <tr>
      <th>
        age
      </th>
      <td>
        <input type="text" name="created_at" value="{{$item->created_at}}">
      </td>
    </tr>
    <tr>
      <th>
        nationality
      </th>
      <td>
        <input type="text" name="updated_at" value="{{$item->updated_at}}">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>送信</button>
      </td>
    </tr>
    @endforeach
  </table>
</form>
@endsection
</body>

</html>