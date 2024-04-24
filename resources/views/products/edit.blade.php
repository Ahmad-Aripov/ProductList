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

        <script>
            document.getElementById('addCharacteristic').addEventListener('click', function(event) {
                event.preventDefault();

                // Создаем новое поле для названия характеристики и значения
                var characteristic = document.createElement('div');
                characteristic.classList.add('characteristic');
                characteristic.innerHTML = `
        <input type="text" name="characteristic_name[]" placeholder="Название характеристики">
        <input type="text" name="characteristic_value[]" placeholder="Значение характеристики">
        <a href="#" class="removeCharacteristic">Удалить</a>
    `;

                // Добавляем новое поле к списку характеристик
                var characteristics = document.querySelector('.characteristics');
                characteristics.appendChild(characteristic);
            });

            // Обработчик клика по кнопке удаления
            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('removeCharacteristic')) {
                    event.preventDefault();
                    event.target.parentElement.remove(); // Удаляем родительский элемент кнопки
                }
            });
        </script>



        <button type="submit">Изменить товар</button>

    </form>
</div>

</body>
</html>