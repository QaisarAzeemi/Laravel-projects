<body style = "text-align : Center; background-color: lightgrey">
<h1 style = 'color: blue'>My Blog</h1>
<form action='makeBlog', method='POST'>
        @csrf
         
        <legend for="title" >Title : </legend> <input type="text" id="title" placeholder = "Blog title" name="title"><br><br>
         <!-- <span style = 'color: red;'>@error('name'){{$message}}@enderror</span><br> -->
        <legend for ="subject"> Subject : </legend>
        <textarea name="subject" rows="1" cols="40">
            About Blog
        </textarea> <br><br><!-- <span style = 'color: red;'>@error('password'){{$message}}@enderror</span><br> -->
        <legend for="description"> Description : </legend>
        <textarea name="description" rows="20" cols="70">
            Describe your Blog please...
        </textarea> <br><br>
        <button type="Submit"> Submit Blog </button> <button type="Reset"> Reset</button><br>
    </form>
</body>