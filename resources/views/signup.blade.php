<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('asset/signup.css')}}">
    <title>TeF</title>
</head>
<body>
    <div class="login">   
       <form action="{{url('/store')}}" method="POST">
        @csrf
        <a href="#"><i class="fas fa-user-plus"></i></a><br>
        <input type="text" name="emp_first_name"  placeholder="first name" class="user-input" required>
        <input type="text" name="emp_last_name"  placeholder="last name" class="user-input" required>
        <input type="email" name="emp_email"  placeholder="Email Address" class="user-input" required>
        
        <input type="number" name="emp_phone"  placeholder="Phone Number" class="user-input" required  minlength="4">
        <span style="color: red; font-size: 15px">@error('emp_phone'){{$message}}@enderror</span>
        <select id="" class="user-input" name="emp_com">
            
             @foreach($companies as $companies)
                 <option value="{{$companies->com_id}}" style="color: #111">{{$companies->com_name}}</option>
             @endforeach
        </select>
        <br>
        <button type="submit" value="Submit" name="log" class="btn">Submit</button>
       </form>

    </div>
</body>
</html>