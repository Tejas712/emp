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
       <form action="{{url('/update')}}" method="POST">
        @csrf
        <a href="#"><i class="fas fa-user-plus"></i></a><br>
         @foreach($data as $data)
         <input type="hidden" value="{{$data->emp_id}}" name="id">
        <input type="text" name="emp_first_name"  placeholder="first name" class="user-input" value="{{$data->emp_first_name}}" required>
        <input type="text" name="emp_last_name"  placeholder="last name" class="user-input" value="{{$data->emp_last_name}}" required>
        <input type="email" name="emp_email"  placeholder="Email Address" class="user-input" value="{{$data->emp_email}}" required>
        <input type="number" name="emp_phone"  placeholder="Phone Number" class="user-input" value="{{$data->emp_phone}}" required>
        <select id="" class="user-input" name="emp_com">
            
             @foreach($companies as $companies)
             @if($data->emp_com!=$companies->com_id)

                 <option value="{{$companies->com_id}}" style="color: #111">{{$companies->com_name}}</option>

                 @else
                  <option value="{{$companies->com_id}}" style="color: #111" selected>{{$companies->com_name}}</option>
                 @endif

             @endforeach
        </select>
         @endforeach
        <button type="submit" value="Submit" name="log" class="btn">Submit</button>
       </form>

    </div>
    
</body>
</html>