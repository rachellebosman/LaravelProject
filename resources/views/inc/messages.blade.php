@if(count($errors) > 0)
    @foreach($errors -> all() as $error)
        <div class=""> 
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('succes'))
        <div class=""> 
            {{session('succes')}}
        </div>
@endif 

@if(session('succes'))
        <div class=""> 
            {{session('error')}}
        </div>
@endif 