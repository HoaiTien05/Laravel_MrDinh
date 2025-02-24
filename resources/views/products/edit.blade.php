<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Chỉnh sửa sản phẩm</h2>

    <form action="{{ route('products.update', $product['id']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{ $product['id'] }}">
        <input type="text" name="name" value="{{ old('name', $product['name']) }}" required class="form-control mb-3" placeholder="Tên sản phẩm">

        <div class="mb-3">
            <label for="avatar" class="form-label">Ảnh đại diện</label>
            <input type="file" name="avatar" class="form-control" accept="image/*">
            @if($product['avatar'])
            <div class="mt-2">
                <img src="{{ asset('storage/' . $product['avatar']) }}" alt="Avatar" width="100">
                <p>Ảnh hiện tại</p>
            </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>

</body>
</html>
