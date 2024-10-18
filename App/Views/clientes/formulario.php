<div class="body-cadastro">
    <div class="container-cadastro">
        <header><?= $titulo ?></header>
        <form id="registrationFormCadastro" action="<?= $cliente?->cpf ? '/clientes/salvar/'.$cliente?->cpf : '/clientes/salvar' ?>" method="post">
            <div class="formCad">
                <div class="DadosPessoais">
                    <span class="titleCad">Dados Pessoais</span>
                </div>
                <div class="Cad-fields">
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Nome Completo</label>
                        <input class="input-Cad" value="<?= $cliente?->nome ?>" type="text" name="nome" placeholder="Insira seu nome completo" required>
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Email</label>
                        <input class="input-Cad" value="<?= $cliente?->email ?>" type="email" name="email" placeholder="Insira seu email" required>
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Número de telefone</label>
                        <input class="input-Cad" value="<?= $cliente?->telefone ?>" type="text" id="telefone" name="telefone" placeholder="Insira seu número de telefone" maxlength="15" required>
                    </div>
                    <?php if(!$cliente): ?>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">CPF</label>
                        <input class="input-Cad" value="<?= $cliente?->cpf ?>" type="text" id="cpf" name="cpf" placeholder="Insira seu CPF" maxlength="14" required>
                    </div>
                    <?php endif; ?>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Nome de Usuário</label>
                        <input class="input-Cad" value="<?= $cliente?->usuario ?>" type="text" name="usuario" placeholder="Insira seu nome de usuário" required>
                    </div>
                    <?php if(!$cliente): ?>
                    <div class="input-field-cadastro password-field">
                        <label class="label-cadastro">Senha</label>
                        <input class="input-Cad" type="password" id="senha" name="senha" placeholder="Crie sua senha" minlength="8" maxlength="15" required>
                        <div id="toggle-password3" class="eye-icon3"></div>
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Confirmar Senha</label>
                        <input class="input-Cad" type="password" id="confirmarSenha" placeholder="Confirme sua senha" minlength="8" maxlength="15" required>
                        <div id="toggle-password2" class="eye-icon2"></div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="details address">
                    <span class="titleCad">Endereço</span>
                </div>
                <div class="Cad-fields">
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">CEP</label>
                        <input class="input-Cad" value="<?= $cliente?->cep ?>" type="text" id="cep" placeholder="Insira seu CEP" name="cep" required maxlength="9">
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Bairro</label>
                        <input class="input-Cad" type="text" id="bairro" placeholder="Insira o bairro" >
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Cidade</label>
                        <input class="input-Cad" type="text" id="cidade" placeholder="Insira a cidade" >
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Estado</label>
                        <input class="input-Cad" type="text" id="estado" placeholder="Insira o estado" >
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Rua</label>
                        <input class="input-Cad" type="text" id="rua" placeholder="Insira sua rua" >
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Número</label>
                        <input class="input-Cad" value="<?= $cliente?->numero ?>" type="number" placeholder="Insira o número" name="numero" required>
                    </div>
                </div>
                <button type="submit" class="nextBtn">
                    <span class="btnText"><?=$cliente?->id ? 'Atualizar' : ' Cadastrar' ?></span>
                </button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    // Máscara para o telefone
    const telefoneInput = document.getElementById('telefone');
    telefoneInput.addEventListener('input', () => {
        const telefone = telefoneInput.value.replace(/\D/g, '');
        telefoneInput.value = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
    });

    document.addEventListener('DOMContentLoaded', function() {
        const cepInput = document.getElementById('cep');
        const bairroInput = document.getElementById('bairro');
        const cidadeInput = document.getElementById('cidade');
        const estadoInput = document.getElementById('estado');
        const ruaInput = document.getElementById('rua');

        // Preencher os campos de endereço se o CEP já estiver definido
        if (cepInput.value) {
            preencherEndereco(cepInput.value.replace(/\D/g, ''));
        }

        cepInput.addEventListener('input', () => {
            const cep = cepInput.value.replace(/\D/g, '');
            if (cep.length === 8) {
                preencherEndereco(cep);
            } else {
                limparCamposEndereco();
            }

            // Máscara para o CEP
            if (cep.length > 5) {
                cepInput.value = cep.replace(/(\d{5})(\d{3})/, '$1-$2');
            } else {
                cepInput.value = cep;
            }
        });

        function preencherEndereco(cep) {
            axios.get(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => {
                    const data = response.data;
                    if (!data.erro) {
                        ruaInput.value = data.logradouro;
                        bairroInput.value = data.bairro;
                        cidadeInput.value = data.localidade;
                        estadoInput.value = data.uf;
                    } else {
                        alert('CEP não encontrado!');
                        limparCamposEndereco();
                    }
                })
                .catch(error => {
                    console.error('Erro ao buscar CEP:', error);
                    alert('Erro ao buscar CEP.');
                    limparCamposEndereco();
                });
        }

        function limparCamposEndereco() {
            ruaInput.value = '';
            bairroInput.value = '';
            cidadeInput.value = '';
            estadoInput.value = '';
        }

    });

    const cpfInput = document.getElementById('cpf');

    cpfInput.addEventListener('input', function() {
        // Remove caracteres que não são números
        let value = cpfInput.value.replace(/\D/g, '');

        // Aplica a máscara
        if (value.length > 11) {
            value = value.slice(0, 11);
        }

        const formattedValue = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4')
            .replace(/(\d{3})(\d{3})(\d{3})/, '$1.$2.$3.')
            .replace(/(\d{3})(\d{3})/, '$1.$2.');

        cpfInput.value = formattedValue;
    });

    const togglePassword3 = document.getElementById('toggle-password3');
    const senhaInput = document.getElementById('senha');

    const togglePassword2 = document.getElementById('toggle-password2');
    const confirmarSenhaInput = document.getElementById('confirmarSenha');

    togglePassword3.addEventListener('click', function() {
        const type = senhaInput.getAttribute('type') === 'password' ? 'text' : 'password';
        senhaInput.setAttribute('type', type);
        this.textContent = type === 'password' ? '👁️' : '🙈'; // Troca o ícone
    });

    togglePassword2.addEventListener('click', function() {
        const type = confirmarSenhaInput.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmarSenhaInput.setAttribute('type', type);
        this.textContent = type === 'password' ? '👁️' : '🙈'; // Troca o ícone
    });


</script>
