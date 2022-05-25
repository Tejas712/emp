<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('asset/signup.css')}}">
    <title>TeF</title>
</head>
<body>
    <div class="login">   
       <form action="{{url('/comstore')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <a href="#"><i class="fa-solid fa-buildings"></i></a><br>
        <input type="text" name="com_name"  placeholder="company name" class="user-input" required>
        <br>
        <input type="email" name="com_email"  placeholder="Email Address" class="user-input" required>
        <br>

        <input type="text" name="com_website"  placeholder="Website" class="user-input" required>
        <br>
                <input type="file" name="com_logo"  placeholder="Logo" class="user-input" required>
                <br>
        <button type="submit" value="Submit" name="log" class="btn">Submit</button>
       </form>

    </div>
</body>
</html>