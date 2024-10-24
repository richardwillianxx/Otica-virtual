<div class="containerCadProdutos">
    <form method="post" action="<?= $produto?->id ? '/produtos/salvar/'.$produto?->id : '/produtos/salvar' ?>">
        <h4><?= $titulo ?></h4>
        <div class="form-groupCadProdutos">
            <label class="LabelCadProdutos" for="nome">Nome:</label>
            <input class="input-select-CadProdutos" type="text" id="nome" name="nome" value="<?= $produto?->nome ?>" required>
        </div>
        <div class="form-groupCadProdutos">
            <label class="LabelCadProdutos" for="preco">Preço:</label>
            <input class="input-select-CadProdutos" type="number" id="preco" name="preco" step="0.01" value="<?= $produto?->preco ?>" required>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="form-groupCadProdutos">
                    <label class="LabelCadProdutos" for="categoria">Categoria:</label>
                    <select class="input-select-CadProdutos" id="categoria" name="categoria" required>
                        <option value="">Selecione uma categoria</option>
                        <option value="1">Feminino</option>
                        <option value="2">Masculino</option>
                        <option value="3">Infantil</option>
                    </select>
                </div>

            </div>
            <div class="col-6">
                <div class="form-groupCadProdutos">
                    <label class="LabelCadProdutos" for="tipo">Tipo:</label>
                    <select class="input-select-CadProdutos" id="tipo" name="tipo" required>
                        <option value="">Selecione um tipo de produto</option>
                        <option value="1">Lente de grau</option>
                        <option value="2">Óculos de sol</option>
                        <option value="3">Acessorios</option>
                    </select>
                </div>
            </div>
        </div>



        <div class="form-groupCadProdutos">
            <label class="LabelCadProdutos" for="foto">Foto:</label>
            <input class="input-select-CadProdutos" type="text" id="foto" name="foto" placeholder="URL da foto" value="<?= $produto?->foto ?>" required>
        </div>

        <div class="form-groupCadProdutos">
            <label class="LabelCadProdutos" for="descricao">Descrição:</label>
            <input class="input-select-CadProdutos" type="text" id="descricao" name="descricao" value="<?= $produto?->decricao ?>" required>
        </div>


        <button class="btnCadProdutos" type="submit">Cadastrar Produto</button>
    </form>
</div>