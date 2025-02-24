<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Thêm sản phẩm</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Trường Tên -->
        <input type="text" name="name" value="{{ old('name') }}" required class="form-control mb-3" placeholder="Tên sản phẩm">

        <!-- Trường Ảnh (Avatar) -->
        <div class="mb-3">
            <label for="avatar" class="form-label">Ảnh đại diện</label>
            <input type="file" name="avatar" class="form-control" accept="image/*">
        </div>

        <!-- Nút Thêm Sản phẩm -->
        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
    </form>
</div>

</body>
</html>
