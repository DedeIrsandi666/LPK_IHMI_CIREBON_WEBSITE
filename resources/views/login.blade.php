<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Admin LPK IHMI CIREBON</title>
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
   <div class="overlay"></div>
      <form action="{{ route('login') }}" method="POST" class="box">
    @csrf
       <div class="header">
           <h4>Silahkan Login Terlebih dahulu untuk mengakses halaman ini!</h4>
           <p>Ini adalah halaman khusus untuk Admin LPK IHMI CIREBON</p>
           @if ($errors-> any())
                <div class= "alert alert-danger">
                    <strong> Whoops </strong> there were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
       </div>
       <div class="login-area">
        <label class="user">Email</label>
           <input type="email" class="username" name="email" placeholder="Masukan Email">
           <label class="pass">Password</label>
           <input type="password" class="password" name="password" placeholder="Masukan Password">
           <input type="submit" value="Login" class="submit">
       </div>
   </form> 
</body>
</html>