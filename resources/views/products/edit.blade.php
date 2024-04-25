<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить товар</title>
    <link rel="stylesheet" href="{{asset('dist/css/edit.css')}}">
</head>
<body>

<div class="card">
    <h2>Редактировать {{$product->name}}</h2>
    <form id="addProductForm" action="{{route('product.update', $product)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="productName">Артикул</label>
        <input type="text" id="productName" name="article" value="{{$product->article}}" required>

        <label for="productName">Название</label>
        <input type="text" id="productName" name="name" value="{{$product->name}}" required>

        <label for="status">Статус</label>
        <select id="status" name="status">
            @php
            if($product->status == "Доступен"){
            @endphp
                <option value="Доступен" selected>Доступен</option>
                <option value="Не доступен">Не доступен</option>
            @php
            }
            else {
            @endphp
                <option value="Доступен">Доступен</option>
                <option value="Не доступен" selected>Не доступен</option>
            @php
            }
            @endphp
        </select>

        <h3>Атрибуты</h3>
        <div class="characteristics">
        </div>
        <div class="container">
            <a href="#" id="addCharacteristic">+Добавить атрибут</a>
        </div>

        <button type="submit">Изменить товар</button>

    </form>
</div>
<script src="{{asset('dist/js/edit.js')}}"></script>
</body>
</html>
