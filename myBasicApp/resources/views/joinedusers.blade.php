<body style = "text-align : Center; background-color: black; color: white">

<h1 style = 'color: blue ; background-color : grey'> My First Blog</h1>
<table border="1" style = 'background-color : lightgrey'>
     
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Password</td>
                    <td>Email</td>
                    <td>Location</td>
                </tr>
                <!-- users is a variable from userConroller deleteUser function -->
                @foreach ($joinedUsersData as $item) 
                <tr>
                    <td>{{$item['Id']}}</td>
                    <td>{{$item['Name']}}</td>
                    <td>{{$item['Password']}}</td>
                    <td>{{$item['Email']}}</td>
                    <td>{{$item['Location']}}</td>

                </tr>
                @endforeach
            </table>
        
   
</body>