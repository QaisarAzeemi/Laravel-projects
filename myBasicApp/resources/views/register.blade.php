<body style = "text-align : Center; background-color: black; color: White">
<h1 style = 'color: blue'><span style = 'background-color: white'>Register</span></h1>
<p>Please <b>Register</b> yourself by entring the following credentials</p>
<form action='register', method='POST'>
        @csrf
         
        <label for="name" >User Name : </label> <input type="text" id="name" placeholder = "Enter Name" name="name"><br><br>
        <label for="pasword" > Password : </label> <input type="password" id="password" placeholder = "password" name="password"><br><br>
        <label for="email" > Email Address : </label> <input type="email" placeholder = "Email" id="email" name="email"><br><br>
        <label for="location" > Location : </label> <input type="location" placeholder = "Enter location" id="location" name="location"><br><br>
        <button type="Submit"> Register </button> <button type="Reset"> Reset</button><br>
    </form>
</body>