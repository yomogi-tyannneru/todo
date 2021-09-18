<!DOCTYPE html>

<html lang="ja">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>test</title>
<style>
  .t{
    display: flex;
    justify-content: center;
  }
  .karamu1 {
    padding: 5px 10px;
    
  }
  .karamu2 {
    padding: 5px 10px;
  }
  .karamu3 {
    padding: 5px 10px;
  }
  .data1 {
    padding: 0px 10px;
    text-align: center;
  }
  .data2 {
    padding: 0px 10px;
    text-align: center;
  }
  .data3 {
    padding: 0px 10px;
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
  width: 60px;
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
  width: 60px;
  text-align: center;
  text-decoration: none;
  color: 	#FF7F50;
  border:2px solid 	#FF7F50;
  border-radius: 6px;
  background: #fff;
  padding: 5px;
}
.btn1:hover {
  background: 	#FF7F50;
  color: #fff;
}
.btn2 {
  display: block;
  width: 60px;
  text-align: center;
  text-decoration: none;
  color: #00FFFF;
  border:2px solid #00FFFF;
  border-radius: 6px;
  background: #fff;
  padding: 5px;
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
  padding: 5px 0;
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
.form-item-input1 {
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 10px;
  height: 25px;
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
        <table class="t">
          <tr>
            <th class="karamu1">作成日</th>
            <th class="karamu2">タスク名</th>
            <th class="karamu3">更新</th>
            <th class="karamu3">削除</th>
          </tr>
          
          <tr>
            @foreach ($items as $item)
            <td class="data1">
              {{$item->created_at}}
            </td>
            <form action="{{ route('/todo/update', ['id' => $item]) }}" method="POST" >
            @csrf
            <td class="data2">
                <div class="form-item">
                <input type="text" name="content" value="{{$item->content}}"  maxlength="20" class="form-item-input1">
                </div>
            </td>
            <td class="data3">
                <div class="form-item">
                <input type="submit"  value="更新" class="btn1"/>
                <input type="hidden" name="id" value="{{$item->id}}" />
                </div>
            </td>
            </form>
            <td class="data3">
              <form action="{{ route('/todo/delete', ['id' => $item]) }}" method="POST" >
                @csrf
                <div class="form-item">
                <input type="hidden" name="content" value="{{$item->content}}" class="form-item-input1">
                </div>
                <input type="submit" name="content" value="削除" class="btn2"/>
                <input type="hidden" name="id" value="{{$item->id}}" />
                </div>
              </form>
              
            </td>
            
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>










