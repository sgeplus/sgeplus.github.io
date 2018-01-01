<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Cadastro de Aluno(a)</title>
    </head>
<body>
    <div class="resp"></div>
    <form id="formulario" method="post" enctype="multipart/form-data" name="formulario" action="app/views/listausuarios.php">
        <ul id="progress">
            <li class="ativo">Dados Pessoais</li>
            <li>Contato</li>
            <li>Mãe</li>
            <li>Pai</li>
            <li>Responsável Financeiro</li>
            <li>Aspecto de Saúde</li>
            <li>Oficinas</li>
        </ul>
        <fieldset>
            <h2>Dados Pessoais</h2>
            <input type="text" name="anoletivo" placeholder="Ano Letivo" />
            <input type="text" name="nmatricula" placeholder="Matricula" />
            <input type="text" name="nomealuno" placeholder="Nome do(a) Aluno(a)" />
            <input type="text" name="datanasc" placeholder="Data de Nascimento" />
            <label for="turma">Turma</label>
                <select name="turma" id="turma">
                    <option value=""></option>
                    <option value="g2">G2</option>
                    <option value="g3">G3</option>
                    <option value="g4">G4</option>
                    <option value="g5">G5</option>

                    <option value="01">1º Ano</option>
                    <option value="02">2º Ano</option>
                    <option value="03">3º Ano</option>
                    <option value="04">4º Ano</option>
                    <option value="05">5º Ano</option>

                    <option value="06">6º Ano</option>
                    <option value="07">7º Ano</option>
                    <option value="08">8º Ano</option>
                    <option value="09">9º Ano</option>
                </select>
            <input type="button" name="next1" class="next acao" value="Próximo" />
        </fieldset>
        <fieldset>
            <h2>Contato</h2>
            <input type="text" name="endaluno" placeholder="Endereço" />
            <input type="button" name="prev" class="prev acao" value="Voltar" />
            <input type="button" name="next2" class="next acao" value="Próximo" />
        </fieldset>
        <fieldset>
            <h2>Mãe</h2>
            <input type="text" name="nomemae" placeholder="Nome" />
            <input type="button" name="prev" class="prev acao" value="Voltar" />
            <input type="button" name="next3" class="next acao" value="Próximo" />
        </fieldset>
        <fieldset>
            <h2>Pai</h2>
            <input type="text" name="nomepai" placeholder="Nome" />
            <input type="button" name="prev" class="prev acao" value="Voltar" />
            <input type="button" name="next4" class="next acao" value="Próximo" />
        </fieldset>
        <fieldset>
            <h2>Responsável</h2>
            <input type="text" name="nomeresp" placeholder="Responsável" />
            <input type="button" name="prev" class="prev acao" value="Voltar" />
            <input type="button" name="next5" class="next acao" value="Próximo" />
        </fieldset>
        <fieldset>
            <h2>Saúde</h2>
            <input type="text" name="probsaude" placeholder="Problema de Saúde" />
            <input type="button" name="prev" class="prev acao" value="Voltar" />
            <input type="button" name="next6" class="next acao" value="Próximo" />
        </fieldset>
        <fieldset>
            <h2>Oficinas</h2>
            <label for="edu_infantil">Oficinas</label>
                <select name="edu_infantil" id="edu_infantil">
                    <option value=""></option>
                    <option value="ba">Ballet</option>
                    <option value="ca">Capoeira</option>
                </select>
            <input type="button" name="prev" class="prev acao" value="Voltar" />
            <input type="submit" name="next" class="acao" value="Salvar" />
        </fieldset>
    </form>
</body>
</html>