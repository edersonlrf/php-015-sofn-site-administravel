<h3 class="mb-5">Edição de usuário</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="usersEmail">Email</label>
        <input type="email" name="email" id="usersEmail" required value="teste@teste.com"
            class="form-control" placeholder="Seu email...">
    </div>

    <div class="form-group">
        <label for="usersSenha">Senha</label>
        <input type="password" name="password" id="usersSenha" required
            class="form-control" placeholder="Sua senha...">
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<hr>

<a href="/admin/users/1" class="btn btn-secondary">Voltar</a>