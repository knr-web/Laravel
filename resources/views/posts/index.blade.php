<!-- TOP PAGE -->

<!-- layoutsふぉるだのapp.blade.phpを継承している ↓ -->
@extends('layouts.app')

<!-- 継承しない部分をsectionで囲う -->
<!-- app.blade.phpの@yield('○○')とイコール -->
@section('content')

<div class="container">

  <p class="pull-right"><a class="btn btn-success" href="/create-form">投稿する</a></p>

  <h2 class="page-header">投稿一覧</h2>

  <table class="table table-hover">
    <tr>
      <th>投稿No</th>
      <th>投稿内容</th>
      <th>投稿者</th>
      <th>投稿日時</th>
      <th></th>
    </tr>

    @foreach ($lists as $list)

    <tr>
      <td>{{$list -> id}}</td>
      <td>{{$list -> contents}}</td>
      <td>{{$list -> username}}</td>
      <td>{{$list -> created_at}}</td>
      <td><a class="btn btn-primary" href="/post/{{ $list -> id }}/update-form">更新</a></td>
      <td><a class="btn btn-danger" href="/post/{{ $list -> id }}/delete" onclick="return confirm('こちらの投稿を削除してもよろしいでしょうか？')">削除</a></td>
    </tr>

    @endforeach

  </table>

</div>

@endsection
