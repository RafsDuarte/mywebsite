<link rel="stylesheet" href="css/contato.css">

<title>Contato</title>

<div id="main" class="center">
	<h2>Contato</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">        
            <form action="enviar.php" method="post">
                <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite aqui seu nome ..." required>
                <label for="email">Email</label>
                    <input type="text" id="email" name="e-mail" placeholder="Digite aqui seu email ..." title="Digite um email" required>
                    
                <label for="assunto">Assunto</label>
                    <select id="assunto" name="assunto" required>
                        <option value="1">Selecione:</option>
                        <option value="2">Parceria</option>
                        <option value="3">Emprego</option>
                        <option value="4">Freelancer</option>
                    </select>

                <label for="subject">Descrição</label>
                    <textarea id="subject" name="subject" placeholder="Escreva seu email ..." style="height:200px"></textarea>
                        <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</div>