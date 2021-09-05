@section1('content1')

@extends('layouts.default')
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
</style>
@section('title', 'Todo List')

@section('content')

<table>
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
      {{$item->created_at}}
    </td>
    <td>
      {{$item->updated_at}}
    </td>
  </tr>
  @endforeach
</table>
@endsection

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
@endsection1

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