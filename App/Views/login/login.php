
<div class="body-login">

    <main class="container-login">
        <div class="logo-login">
            <img class="logoVV" src="img/logo/logoVV2.png" alt="Logo">
        </div>
        <h2 class="h2-login">Login</h2>
        <form class="form-login" action="/autorizarLogin" method="post">

            <div class="input-field-login">
                <input type="text" name="email" id="username" placeholder="Email" required>
                <div class="underline"></div>
            </div>

            <div class="input-field-login">
                <input type="password" name="senha" id="password" placeholder="Senha" minlength="8" maxlength="15" required>
                <div id="icon" onclick="showhide()"></div>
                <div class="underline"></div>
            </div>

            <div class="a-login">
                <a href="recupera.php" class="link-small link-esqueci-senha">Esqueci minha senha</a> 

            <input type="submit" value="Entrar">

            <div class="a-login">
                <span class="link-text">Não possui um cadastro?</span>
                <a href="cadastro" class="link-small link-cadastrar">Cadastrar-se</a> 
            </div>

        </form>
    </main>
    
</div>

<script>
    const icon = document.getElementById('icon');
    const passwordInput = document.getElementById('password');

    function showhide() {
        if (passwordInput.type === 'password') {
            passwordInput.setAttribute('type', 'text');
            icon.classList.add('hide');
        } else {
            passwordInput.setAttribute('type', 'password');
            icon.classList.remove('hide');
        }
    }
</script>