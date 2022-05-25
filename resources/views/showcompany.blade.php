<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeF</title>
    <link rel="stylesheet" href="{{asset('asset/main.css')}}">
   
</head>
<body>
    @include('header');
      <section>
          @foreach($emp_data as $data)
          <div class="card">
            <div class="company">
                <div class="img">
                    <img src="{{asset('/images/'.$data->com_logo)}}" alt="" srcset="">
                </div>
                <div class="cd">
                    <h4>{{$data->com_name}}</h4>
                    <h4>{{$data->com_logo}}</h4>
                    <h5>{{$data->com_email}}</h5>
                    <h6>
                        {{$data->com_website}}
                    </h6>
                </div>
            </div>
            <div class="btn">
                <a href="{{url('/comedit/'.$data->com_id)}}" >Edit</a>
                <a href="{{url('/comdelete/'.$data->com_id)}}" >Delet</a>
            </div>
          </div>
          @endforeach
      </section>
      <div class="row">
           {{$emp_data->links()}}
      </div>
      @include('footer');
  <script src="{{asset('asset/main.js')}}"></script>
</body>
</html>