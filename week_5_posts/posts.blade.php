<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Tanjin sajt</title>

        
    </head>
    <body>
       <h1 style="text-align:center">Postovi</h1>
        <table>
            <tr>
                <th>Title  </th>
                <th>Content  </th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Likes </th>
                
            </tr>
      
       @foreach($posts as $post)
            <tr>
                <td> {{$post->title}}</td>
                <td> {{$post->content}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td> {{$post->likes}}</td>
                
                <td> <a href="posts/{{$post->id}}/edit"> <button>Izmijeni</button></a></td>
                <td>
                   <form method="DELETE" action="posts/posts/{{$post->id}}"> 
                        @method('DELETE')
                        @csrf
                        <button type=submit>Izbriši</button>
                        
                    </form>
                </td>
                <td>
                    <form method="GET" action="posts/{{ $post->id }}/like">
                        @csrf
                    
                        <button name="likes" type="submit">Like</button>
                    </form> 
                </td>
               
            </tr>
       @endforeach
       </table>
       <a href="posts/create"><button>Kreiraj novi post</button></a>
      
       
    </body>
    <style>
body {
    background-color: #fff;
    color: #61d640;
    font-family: 'Candara', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin-left: 10%;
    
}
input[type=text], textarea {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 9px;
  font-size: 15px;
}
button {
  background-color: #298a0c; 
  border: none;
  color: white;
  padding: 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 9px;
}
td:hover {
    color:#db124e;
    
   
}

</style>

</html>
