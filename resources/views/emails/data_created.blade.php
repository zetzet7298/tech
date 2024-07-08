<!DOCTYPE html>
<html>
<head>
    <title>Thông tin liên hệ</title>
</head>
<body>
    <h1>Thông tin liên hệ</h1>
    <ul>
        <li>ID: {{ $data->id }}</li>
        <li>Tên: {{ $data->name }}</li>
        <li>Email: {{ $data->email }}</li>
        <li>Email: {{ $data->message }}</li>
        <!-- Thêm các thông tin khác nếu cần -->
    </ul>
</body>
</html>
