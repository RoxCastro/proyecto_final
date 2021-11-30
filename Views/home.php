<div class="container">
<?php if (isset(session()->login_error)){?>
<div class="alert alert-danger" role="alert">
    <?=session()->login_error?>
</div>
<?php } ?>
<h2> </h2>

<div class="container">
</br>

    <h3> Iniciar sesión</h3>
    </br>
    <form action= "user/login" method="post">
        <div class="form-group">
            <label for="login"> Nombre del usuario</label>
            <input class="form-control" name="login">
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password">
    </br></div>
    <button type="submit" class= "btn btn-primary">Entrar</button>
</form>
</div>

