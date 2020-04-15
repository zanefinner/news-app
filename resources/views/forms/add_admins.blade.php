<form action = "/owner/add-admin" method="post">@csrf
    //show admin list here!<br>
    <input type="text" name="owner_email">          <br>
    <input type="password" name="owner_password">
    <hr>
    <input type="text" name="email">                <br>
    <input type="password" name="password">         <br>
    <button type="submit">Add</button>              
</form>