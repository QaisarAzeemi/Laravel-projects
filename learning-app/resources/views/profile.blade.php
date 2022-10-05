<!Doctype Html>
<html>
<head>
    <title> User Profile </title>
</head>
<body style = 'background-color: lightgray'>
<h2>User Profile</h2>
<h3>Hello, {{session('name')}}</h3>
 your password is : {{session('pasword')}} <!-- not showing -->

 <h3> Upload Picture </h3>
 <form action="upload" method="POST" enctype = "multipart/form-data">
 @csrf
 <button type = "Submit">Upload picture</button>
 <input type = "file" name = "pic"><br>
</form>
 <a href="logout"> Logout </a>
    <!-- @if($errors->any())
       @foreach($errors->all() as $err)
        <ul>
         <li style = 'color: red; text-align: center'>{{$err}}</li>
         </ul>
        @endforeach
    @endif -->
    <!-- <form action='login', method='POST'>
        @csrf
        <h2 style = 'color: blue'>Sign In</h2> 
        <label for="name" >User Name : </label> <input type="text" id="name" name="name"> <span style = 'color: red;'>@error('name'){{$message}}@enderror</span><br>
        <label for="pasword" > Password : </label> <input type="password" id="pasword" name="pasword"><span style = 'color: red;'>@error('pasword'){{$message}}@enderror</span><br>
        <button type="Submit"> Login </button> <button type="Reset"> Reset</button><br>
    </form> -->

</body>
</html>