<body style = "text-align : Center; background-color: lightgrey">

<h1 style = 'color: blue ; background-color : yellow'> My Blog</h1>
<table border="1" style = 'background-color : orange'>

                <tr>
                    <td>Title</td>
                    <td>Subject</td>
                    <td>Description</td>
                </tr>
                <!-- users is a variable from userConroller deleteUser function -->
                @foreach ($blogs as $item) 
                <tr>
                    <td>{{$item['Title']}}</td>
                    <td>{{$item['Subject']}}</td>
                    <td>{{$item['Description']}}</td>
                </tr>
                @endforeach
            </table>
        
   
</body>