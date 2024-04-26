<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить товар</title>
    <link rel="stylesheet" href="{{asset('dist/css/create.css')}}">
</head>
<body>

<div class="card">
    <h2>Добавить товар</h2>
    <form id="addProductForm" action="{{route('product.store')}}" method="POST">
        @csrf
        <label for="productName">Артикул</label>
        <input type="text" id="productName" name="article" required>

        <label for="productName">Название</label>
        <input type="text" id="productName" name="name" required>

        <label for="status">Статус</label>
        <select id="status" name="status">
            <option value="Доступен">Доступен</option>
            <option value="Не доступен">Не доступен</option>
        </select>

        <h3>Атрибуты</h3>
        <div class="characteristics">
        </div>
        <div class="container">
        <a href="#" id="addCharacteristic">+Добавить атрибут</a>
        </div>

        <script src="{{asset('dist/js/edit.js')}}"></script>



        <button type="submit">Добавить товар</button>

    </form>
</div>

<script src="script.js"></script>
</body>
</html>
