<div class="body-cadastro">
    <div class="container-cadastro">
        <header>Cadastro</header>
        <form id="registrationFormCadastro" action="novousuario" method="post">
            <div class="formCad">
                <div class="DadosPessoais">
                    <span class="titleCad">Dados Pessoais</span>
                </div>
                <div class="Cad-fields">
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Nome Completo</label>
                        <input class="input-Cad" type="text" name="nome" placeholder="Insira seu nome completo" required>
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Email</label>
                        <input class="input-Cad" type="email" name="email" placeholder="Insira seu email" required>
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Número de telefone</label>
                        <input class="input-Cad" type="text" id="telefone" name="telefone" placeholder="Insira seu número de telefone" maxlength="15" required>
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">CPF</label>
                        <input class="input-Cad" type="text" id="cpf" name="cpf" placeholder="Insira seu CPF" maxlength="14" required>
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Nome de Usuário</label>
                        <input class="input-Cad" type="text" name="usuario" placeholder="Insira seu nome de usuário" required>
                    </div>
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
                </div>
                <div class="details address">
                    <span class="titleCad">Endereço</span>
                </div>
                <div class="Cad-fields">
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">CEP</label>
                        <input class="input-Cad" type="text" id="cep" placeholder="Insira seu CEP" name="cep" required maxlength="10">
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Bairro</label>
                        <input class="input-Cad" type="text" id="bairro" placeholder="Insira o bairro" required>
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Cidade</label>
                        <input class="input-Cad" type="text" id="cidade" placeholder="Insira a cidade" required>
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Estado</label>
                        <input class="input-Cad" type="text" id="estado" placeholder="Insira o estado" required>
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Rua</label>
                        <input class="input-Cad" type="text" id="rua" placeholder="Insira sua rua" required>
                    </div>
                    <div class="input-field-cadastro">
                        <label class="label-cadastro">Número</label>
                        <input class="input-Cad" type="text" placeholder="Insira o número" name="numero" required>
                    </div>
                </div>
                <button type="submit" class="nextBtn">
                    <span class="btnText">Cadastrar</span>
                </button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    const telefoneInput = document.getElementById('telefone');
    telefoneInput.addEventListener('input', () => {
        const telefone = telefoneInput.value.replace(/\D/g, '');
        telefoneInput.value = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
    });

    const cpfInput = document.getElementById('cpf');
    cpfInput.addEventListener('input', () => {
        const cpf = cpfInput.value.replace(/\D/g, '');
        cpfInput.value = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
    });

    document.getElementById('registrationFormCadastro').addEventListener('submit', function(event) {
        const senha = document.getElementById('senha').value;
        const confirmarSenha = document.getElementById('confirmarSenha').value;

        if (senha !== confirmarSenha) {
            alert('As senhas não coincidem!');
            event.preventDefault(); // Impede o envio do formulário
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const cepInput = document.getElementById('cep');
        const bairroInput = document.getElementById('bairro');
        const cidadeInput = document.getElementById('cidade');
        const estadoInput = document.getElementById('estado');
        const ruaInput = document.getElementById('rua');

        cepInput.addEventListener('input', () => {
            const cep = cepInput.value.replace(/\D/g, '');
            if (cep.length === 8) { // Verifica se o CEP está completo
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
            } else {
                // Limpa os campos de endereço se o CEP não estiver completo
                limparCamposEndereco();
            }
        });

        function limparCamposEndereco() {
            ruaInput.value = '';
            bairroInput.value = '';
            cidadeInput.value = '';
            estadoInput.value = '';
        }

        cepInput.addEventListener('input', () => {
            const cep = cepInput.value.replace(/\D/g, '');
            if (cep.length > 5) {
                cepInput.value = cep.replace(/(\d{5})(\d{3})/, '$1-$2');
            } else {
                cepInput.value = cep;
            }
        });
    });
</script>
