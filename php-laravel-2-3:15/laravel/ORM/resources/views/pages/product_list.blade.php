<main>
    <a href="{{ route('find') }}">find</a>
    <a href="{{ route('create') }}">create</a>
    <a href="{{ route('update') }}">update</a>
    <a href="{{ route('delete') }}">delete</a>
    <ul>

        @foreach ($products as $product)
            <li>{{ $product['id'] }}</li>
            <li>{{ $product['title'] }}</li>
            <li>{{ $product['price'] }}</li>
            <li>{{ $product['qty'] }}</li>
            <li>{{ $product['description'] }}</li>
            <hr>
        @endforeach
    </ul>
</main>