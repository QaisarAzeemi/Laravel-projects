<body style = "text-align : Center; background-color: black; color: white">

<h1 style = 'color: blue ; background-color : grey'> My First Blog</h1>
<table border="1" style = 'background-color : lightgrey'>
     
                <tr>
                    <td>Id</td>
                    <td>Title</td>
                    <td>Subject</td>
                    <td>Description</td>
                </tr>
                <!-- users is a variable from userConroller deleteUser function -->
                @foreach ($blogPosts as $item) 
                <tr>
                    <td>{{$item['Id']}}</td>
                    <td>{{$item['Title']}}</td>
                    <td>{{$item['Subject']}}</td>
                    <td>{{$item['Description']}}</td>
                </tr>
                @endforeach
            </table>
        
   
</body>