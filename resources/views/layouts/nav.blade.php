<ul class="menu vertical">
    <li><a href="{{route('login')}}">Log In</a></li>
    <li><a href="{{route('register')}}">Register</a></li>
    @if(!auth()->guest())
    <li>
        {!! Form::open(['url' => 'logout', 'method' => 'post', 'id' => 'logout']) !!}
        <a onclick="$('#logout').submit();">Log Out</a>
        {!! Form::close() !!}
    </li>
    @endif

</ul>