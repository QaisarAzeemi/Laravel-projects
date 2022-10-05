<!Doctype Html>
<html>
<head>
    <title> Login page </title>
</head>
<body style = 'background-color: lightgray'>
    <!-- @if($errors->any())
       @foreach($errors->all() as $err)
        <ul>
         <li style = 'color: red; text-align: center'>{{$err}}</li>
         </ul>
        @endforeach
    @endif -->
    <form action='user', method='POST'>
        @csrf
        <h2 style = 'color: blue'>Sign In</h2> 
        <label for="name" >User Name : </label> <input type="text" id="name" name="name"> <span style = 'color: red;'>@error('name'){{$message}}@enderror</span><br>
        <label for="pasword" > Password : </label> <input type="password" id="pasword" name="pasword"><span style = 'color: red;'>@error('pasword'){{$message}}@enderror</span><br>
        <button type="Submit"> Login </button> <button type="Reset"> Reset</button><br>
    </form><br>
    New User?<br>
    <a href="signup"> Sign Up </a>
</body>
</html>