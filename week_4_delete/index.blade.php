<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tanjin sajt</title>

        
    </head>
    <body>
       <h1>Dobrodošli u Laravel</h1>
       <p>This is Laravel app!</p>
        
        <table>
            <tr>
                <th>Ime  </th>
                <th>Prezime  </th>
                <th>E-mail  </th>
                <th>Password  </th>
                
            </tr>
      
       @foreach($users as $user)
            <tr>
                <td> {{$user->name}}</td>
                <td> {{$user->surname}}</td>
                <td> {{$user->email}}</td>
                <td> {{$user->password}}</td>
                <td> <a href="edit/{{$user->id}}"> <button>Edit</button></a></td>
                <td><a href="delete/{{$user->id}}"><button>Delete</button></a></td>  
            </tr>
       @endforeach
       </table>
       <a href="/laravel/my_project/public/about"><button type="button">Vodi me do registracije</button></a>
       
    </body>
</html>
