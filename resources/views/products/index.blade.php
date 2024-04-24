<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@extends('index')
@section('content')
    <table class="table table-striped table-bordered table-hover table-sm">
        <thead class="thead-dark">
        <tr>
            <th>Артикул</th>
            <th>Название</th>
            <th>Статус</th>
            <th>Атрибуты</th>
        </tr>
        </thead>
        @foreach($products as $product)
            <tr>
                <td><a href="{{ route('product.show',$product->id)}}">{{$product->article}}</a></td>
                <td>{{$product->name}}</td>
                <td>{{$product->status}}</td>
                <td>{{$product->data}}</td>
                <td>
            </tr>
        @endforeach
    </table>
@endsection
</body>
</html>
