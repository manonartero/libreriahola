
{include 'body.tpl'}

<div class="">
    <form method="POST" action="validar">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn">Iniciar sesion</button>
    </form>
</div>



