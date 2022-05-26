<header>
        <a href="#" class="brand">{{auth()->user()->name}}</a>
        <div class="menu-btn"></div>
        <div class="navigation">
          <a href="#{{url('/home')}}">Home</a>
          <a href="{{url('/logout')}}">logout</a>
          <a href="{{url('/addcompany')}}">AddCompany</a>
          <a href="{{url('/signup')}}">AddEmploye
          </a>
          <a href="{{url('/showcompany')}}">companies</a>
        </div>
    </header>