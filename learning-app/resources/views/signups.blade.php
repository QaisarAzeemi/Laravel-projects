<body style = "text-align : Center; background-color: lightgrey">
<h1 style = 'color: blue'>Sign Up</h1>
<form action='signup', method='POST'>
        @csrf
         
        <label for="name" >User Name : </label> <input type="text" id="name" placeholder = "Enter Name" name="name"><br><br>
         <!-- <span style = 'color: red;'>@error('name'){{$message}}@enderror</span><br> -->
        <label for="pasword" > Password : </label> <input type="password" id="password" placeholder = "password" name="password"><br><br><!-- <span style = 'color: red;'>@error('password'){{$message}}@enderror</span><br> -->
        <label for="email" > Email Address : </label> <input type="email" placeholder = "Email" id="email" name="email"><br><br>
        <label for="location" > Location : </label> <input type="location" placeholder = "Enter location" id="location" name="location"><br><br>
        <button type="Submit"> Sign Up </button> <button type="Reset"> Reset</button><br>
    </form>
</body>