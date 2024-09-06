<div class="body-cadastro">
    <main class="container-cadastro">
        <div class="logo-container">
            <img class="logoVV" src="img/logo/logoVV2.png" alt="Logo">
        </div>
        <h2 class="h2-cadastro">Cadastro de usuário</h2>
        <form class="form-cadastro" action="/novousuario" method="post">
            <div class="input-field-cadastro">
                <input type="text" name="nome" id="name" placeholder="Nome" required>
                <div class="underline"></div>
            </div>

            <div class="input-field-cadastro">
                <input type="text" name="cpf" id="cpf" placeholder="CPF" maxlength="14" required>
                <div class="underline"></div>
               
            </div>

            <div class="input-field-cadastro">
                <input type="email" name="email" id="email" placeholder="Email" required>
                <div class="underline"></div>
            
            </div>

            <div class="input-field-cadastro">
                <input type="text" name="telefone" id="telefone" placeholder="Telefone" maxlength="15" required>
                <div class="underline"></div>
            
            </div>

            <div class="input-field-cadastro">
                <input type="text" name="usuario" id="username" placeholder="Usuário" required>
                <div class="underline"></div>
            </div>

            <div class="input-field-cadastro">
                <input type="password" name="senha" id="password" placeholder="Senha" minlength="8" maxlength="15" required>
                <div id="icon" onclick="showhide()"></div>
                <div class="underline"></div>
            </div>

            <div class="input-field-cadastro">
                <input type="password" name="" id="" placeholder="Confirme sua Senha" minlength="8" maxlength="15" required>
                <div id="icon" onclick="showhide()"></div>
                <div class="underline"></div>
            </div>

            <input type="submit" value="Cadastrar">
        </form>
    </main>
</div>



<script>
                    const cpfInput = document.getElementById('cpf');
                    cpfInput.addEventListener('input', () => {
                        const cpf = cpfInput.value.replace(/\D/g, '');
                        cpfInput.value = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
                    });
              
                    const emailInput = document.getElementById('email');
                    const emailError = document.getElementById('email-error');

                    emailInput.addEventListener('input', () => {
                        if (!emailInput.checkValidity()) {
                            emailError.textContent = 'Por favor, insira um e-mail válido.';
                            emailError.style.display = 'block';
                        } else {
                            emailError.textContent = '';
                            emailError.style.display = 'none';
                        }
                    });

                    const telefoneInput = document.getElementById('telefone');
                    telefoneInput.addEventListener('input', () => {
                        const telefone = telefoneInput.value.replace(/\D/g, '');
                        telefoneInput.value = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
                    });
 
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


