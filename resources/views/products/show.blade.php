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
            <form action="{{route('product.edit', $product->id)}}" method="GET">
                <input type="submit" value="Изменить" class="edit-button">
            </form>
        </div>
        <div class="delete-link">
            <form action="{{route('product.destroy', $product->id)}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить" class="delete-button">
            </form>
        </div>

    </div>
</div>


</body>
</html>
