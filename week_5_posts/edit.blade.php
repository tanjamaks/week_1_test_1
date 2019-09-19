<form method="POST" action="posts/posts">

    @csrf

    <p>Naslov:</p>
    <input type="text" name="title" placeholder="Title" required value="{{ $post->title }}">
    
    <p>Sadrzaj:</p>
    <textarea type="text" name="content"placeholder="Content" required="{{$post->content}}"></textarea>

    <p><button type="submit" >Sačuvaj izmjene</button>
   
</form>
<a href="posts/posts">
    <button>Nazad</button>
</a>
<style>
body {
    background-color: #fff;
    color: #61d640;
    font-family: 'Candara', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin-left: 15%;
  
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

