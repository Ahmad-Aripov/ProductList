<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карточка товара</title>
    <link rel="stylesheet" href="{{asset('dist/css/show.css')}}">
</head>
<body>

<div class="card">
    <h2>{{$product->name}}</h2>
    <div class="container">
        <p><strong style="color: gray;">Артикул:</strong> {{$product->article}}</p>
        <p><strong style="color: gray;">Название:</strong> {{$product->name}}</p>
        <p><strong style="color: gray;">Статус:</strong> {{$product->status}}</p>
        @if (!empty($product->data))
            <p><strong>Атрибуты:</strong></p>
            @foreach ($product->data as $dataName => $dataValue)
                <div>
                    <span><strong>{{$dataName}}:</strong></span>
                    <span>{{$dataValue}}</span>
                </div>
            @endforeach
        @endif
        <div class="edit-link">
            <a href="{{route('product.edit', $product->id)}}" class="edit-button">Изменить</a>
        </div>
        <div class="delete-link">
            <a href="{{route('product.create')}}" class="delete-button">Удалить</a>
        </div>

    </div>
</div>


</body>
</html>
