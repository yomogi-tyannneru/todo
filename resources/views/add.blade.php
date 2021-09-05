@extends('layouts.default')
<style>
    th {
      background-color: #289ADC;
      color: white;
      padding: 5px 40px;
    }
    tr:nth-child(odd) td{
      padding: 10px;
    }
    td {
      padding: 25px 40px;
      background-color: #EEEEEE;
      text-align: center;
    }
    input {
      padding: 5px;
    }
    button {
      padding: 10px 20px;
      background-color: #289ADC;
      border: none;
      color: white;
    }
</style>
@section('title', 'Todo List')

@section('content')
<form action="/todo/create" method="POST">
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
