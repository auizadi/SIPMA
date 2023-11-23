<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>SIPMA : Sistem Informasi Pengaduan Mahasiswa</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<div class="grid-container">
  <div class="grid-item gambar-log">
    <h1>Login <br>Pengguna.</h1>
  </div>
  <div class="grid-item login">
    <h1>Login</h1>
    
    <form action="" method="POST">
      @csrf
      <label for="email">Email</label>
      <input type="email" name="email" id="" placeholder="Masukkan Email" required>
      <label for="password">Password</label>
      <input type="password" name="password" id="" placeholder="Masukkan Password" required>
      <br>
      <button type="submit" name="submit" id="button" >Login</button>
    </form>
    
  </div>
</div>

</body>
</html>