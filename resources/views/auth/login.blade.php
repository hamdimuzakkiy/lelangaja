<form method="post" action="{{url('login')}}">
    {!! csrf_field() !!}
    <input type="text" name="email" placeholder="email"> 
    <input type="password" name="password" placeholder="password"> 
    <button type="submit">log in</button>
</form>