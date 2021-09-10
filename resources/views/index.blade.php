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
  td {
    padding: 25px 40px;
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
  background: #fff;
}
.btn:hover {
  background: #9370DB;
  color: #fff;
}
.btn1 {
  display: block;
  width: 80px;
  text-align: center;
  text-decoration: none;
  color: 	#FF7F50;
  border:2px solid 	#FF7F50;
  border-radius: 6px;
  background: #fff;
}
.btn1:hover {
  background: 	#FF7F50;
  color: #fff;
}
.btn2 {
  display: block;
  width: 80px;
  text-align: center;
  text-decoration: none;
  color: #00FFFF;
  border:2px solid #00FFFF;
  border-radius: 6px;
  background: #fff;
}
.btn2:hover {
  background: #00FFFF;
  color: #fff;
}
.card {
  margin: 250px auto 0;
  width: 55%;
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
      <form action="/todo/create" method="POST">
        <div class="form-item">
          @csrf
          <input type="text" name="content" class="form-item-input">
          <input type="submit" value="追加" class="btn"/>
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
              <form action="/todo/update" method="POST">
                <div class="form-item">
                @csrf
                <input type="text" name="content" class="form-item-input">
                </div>
              </form>
              {{$item->content}}
            </td>
            <td>
              <form action="/todo/update" method="POST">
                <div class="form-item">
                @csrf
                <input type="submit" name="content" value="更新" class="btn1"/>
                </div>
              </form>
              {{$item->created_at}}
            </td>
            <td>
              <form action="/todo/delete" method="POST">
                <div class="form-item">
                @csrf
                <input type="submit" name="content" value="削除" class="btn2"/>
                </div>
              </form>
              {{$item->updated_at}}
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>










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