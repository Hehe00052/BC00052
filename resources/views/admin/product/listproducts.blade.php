<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">List of Products</div>

                <div class="card-body">
                    @if (count($products) > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Photo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>${{ number_format($product->price, 2) }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>
                                            @if ($product->photo)
                                                <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}" style="max-height: 100px;">
                                            @else
                                                No Photo
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No products found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
