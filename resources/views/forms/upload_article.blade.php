<form action="/admin/post-new" method="post">
    @csrf
    <input type="name" name="email">                <br>
    <input type="password" name="password">         <br>
    <hr>
    <input type="name" name="title">                <br>
    <input type="text-box" name="article_content">  <br>
    <button type="submit">Submit</button>
</form>