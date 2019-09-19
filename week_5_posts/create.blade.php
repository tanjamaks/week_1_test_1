<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1>Napišite novi post</h1>

    

<form method="POST" action="http://localhost:8080/laravel/my_project/public/posts/create">   
  {{csrf_field()}}  
    <h2>Naslov</h2>
     <input name="title" type="text" placeholder="Title" required><br>
     <h2>Sadržaj </h2>
     <textarea name="content" cols="40" rows="6">Napiši post</textarea>
    <br>
    <button type="submit" name="add">Dodaj post</button>
    
    <button type="button" name="like">Like</button>
    <a href="/laravel/my_project/public/posts/posts"><button type="button" name="register">Početna strana</button></a>  
</form>
<style>
body {
    background-color: #fff;
    color: #61d640;
    font-family: 'Candara', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
    margin-left: 40%;
    margin-top: 10%;
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
</style>

