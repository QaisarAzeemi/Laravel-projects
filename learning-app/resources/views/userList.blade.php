<body >
    
<h1 style = 'color: blue ; background-color : yellow'> Users List</h1>
<table border="1" style = 'background-color : orange'>

                <tr>
                    <td>Name</td>
                    <td>Id</td>
                    <td>Password</td>
                    <td>Email</td>
                    <td>Location</td>
                </tr>
                <!-- users is a variable from userConroller deleteUser function -->
                @foreach ($users as $item) 
                <tr>
                    <td>{{$item['Name']}}</td>
                    <td>{{$item['Id']}}</td>
                    <td>{{$item['Password']}}</td>
                    <td>{{$item['Email']}}</td>
                    <td>{{$item['Location']}}</td>
                    <td><a href={{"delete/".$item['Id']}}>Delete</a>
                    <a href={{"edit/".$item['Id']}}>Edit</a> </td>
                </tr>
                @endforeach
            </table>

</body>