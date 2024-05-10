<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Login</h1>
    <form action="Submit_post.php" method="POST">
        <div>
            <label for="nama_lengkap">Nama_Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" required>
        </div><br>
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </div><br>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div><br>
        <div>
            <button type="submit">Registrasi</button>
        </div>
    </form>  
</body>
</html>