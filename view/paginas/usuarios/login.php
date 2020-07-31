<main>
    <form>
        <legend>Login</legend>
        <div class="form-group">
            <label for="inputEmail">Endereço de Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="inputSenha">Senha</label>
            <input type="password" class="form-control" id="inputSenha" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="<?php echo HOME_URI;?>usuario/criar">Registrar-se</a>
    </form>
</main>