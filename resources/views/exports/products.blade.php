<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Identificador</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->nombre }}</td>
            <td>{{ $product->identificador }}</td>
        </tr>
    @endforeach
    </tbody>
</table>