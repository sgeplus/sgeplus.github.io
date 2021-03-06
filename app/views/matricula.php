<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>SGE::Plus - Sistema de Gestão Escolar</title>
        <link rel="shortcut icon" href="assets/images/favicon.ico" />
        <base href="http://localhost/escola/" />
        <link rel="stylesheet" href="assets/css/sge.css" />
    </head>
<body>
    <div class="resp"></div> <!-- Receber retorno do usuário -->
    <div class="cabecalho">
        <a href="home"><img id="logo" src="assets/images/logo-sge-system.png" alt=""></a>
        <h1>Cadastro de Alunos</h1>
    </div>
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
            <input type="text" name="anoletivo" placeholder="Ano Letivo" /> <!-- 00 -->
            <input type="text" name="nmatricula" placeholder="Matricula" /> <!-- 01 -->
            <input type="text" name="nomealuno" placeholder="Nome do(a) Aluno(a)" /> <!-- 02 -->
            <input type="text" name="datanasc" placeholder="Data de Nascimento" /> <!-- 03 -->
            <label for="turma">Turma</label> <!-- 04 -->
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
            <input type="text" name="endaluno" placeholder="Endereço" /> <!-- 05 -->

            <input type="text" name="bairro" placeholder="Bairro" /> <!-- 06 -->

            <input type="text" name="cidade" placeholder="Cidade" /> <!-- 07 -->

            <input type="text" name="uf" placeholder="UF" /> <!-- 08 -->

            <input type="text" name="cep" placeholder="CEP" /> <!-- 09 -->

            <h3>Possui Bolsa Família ?</h3> <!-- 10 -->
            <input type="radio" id="bolsasim" name="bolsafamilia" />
            <label id="labelradio" for="bolsasim"><span></span>Sim</label>
            <input type="radio" id="bolsanao" name="bolsafamilia" />
            <label id="labelradio" for="bolsanao"><span></span>Não</label><p></p>

            <input type="text" name="telresidaluno" placeholder="Tel. Residência" /> <!-- 11 -->

            <input type="text" name="Telcelulaluno" placeholder="Tel. Celular" /> <!-- 12 -->

            <input type="text" name="emailaluno" placeholder="E-mail" /> <!-- 13 -->

            <h3>Reside com:</h3> <!-- 14 -->
            <input type="radio" id="residecompais" value="Não" name="residecom" />
            <label for="residecompais"><span></span>Pais</label>

            <input type="radio" id="residecompai" name="residecom" />
            <label for="residecompai"><span></span>Pai</label>

            <input type="radio" id="residecommae" name="residecom" />
            <label for="residecommae"><span></span>Mãe</label>

            <input type="radio" id="residecomoutros" value="Sim" name="residecom" />
            <label for="residecomoutros"><span></span>Outros</label>
            <div class="outros"></div>

            <input type="button" name="prev" class="prev acao" value="Voltar" />
            <input type="button" name="next2" class="next acao" value="Próximo" />
        </fieldset>
        <fieldset>
            <h2>Informações sobre a Mãe</h2>
            <input type="text" name="nomemae" placeholder="Nome" />
            <input type="text" name="telmae" placeholder="Tel Residencial" />
            <input type="text" name="telcelulmae" placeholder="Tel Celular" />
            <input type="text" name="zapmae" placeholder="Nº Whatsapp" />
            <input type="text" name="emailmae" placeholder="E-mail" />
            <input type="text" name="profissaomae" placeholder="Profissão" />
            <input type="text" name="localtrabmae" placeholder="Local de Trabalho" />
            <input type="button" name="prev" class="prev acao" value="Voltar" />
            <input type="button" name="next3" class="next acao" value="Próximo" />
        </fieldset>
        <fieldset>
            <h2>Informações sobre o Pai</h2>
            <input type="text" name="nomepai" placeholder="Nome" />
            <input type="text" name="telpai" placeholder="Tel Residencial" />
            <input type="text" name="telcelulpai" placeholder="Tel Celular" />
            <input type="text" name="zappai" placeholder="Nº Whatsapp" />
            <input type="text" name="emailpai" placeholder="E-mail" />
            <input type="text" name="profissaopai" placeholder="Profissão" />
            <input type="text" name="localtrabpai" placeholder="Local de Trabalho" />
            <input type="button" name="prev" class="prev acao" value="Voltar" />
            <input type="button" name="next4" class="next acao" value="Próximo" />
        </fieldset>
        <fieldset>
            <h2>Responsável Financeiro</h2>
            <input type="text" name="nomeresp" placeholder="Nome" />
            <input type="text" name="enderecoresp" placeholder="Endereço Residencial" />
            <input type="text" name="bairroresp" placeholder="Bairro" />
            <input type="text" name="cidaderesp" placeholder="Cidade" />
            <input type="text" name="ufresp" placeholder="UF" />
            <input type="text" name="cepresp" placeholder="CEP" />
            <input type="text" name="telcelulresp" placeholder="Tel Celular" />
            <input type="text" name="zapresp" placeholder="Nº Whatsapp" />
            <input type="text" name="emailresp" placeholder="E-mail" />
            <input type="text" name="rgresp" placeholder="RG" />
            <input type="text" name="cpfresp" placeholder="CPF" />
            <input type="text" name="naturalresp" placeholder="Naturalidade" />
            <input type="button" name="prev" class="prev acao" value="Voltar" />
            <input type="button" name="next5" class="next acao" value="Próximo" />
        </fieldset>
        <fieldset>
            <h2>Saúde</h2>
            <input type="text" name="tiposangue" placeholder="Tipo Sanguineo" />
            <input type="text" name="probsaude" placeholder="Problema de Saúde" />
            <input type="text" name="medicamentos" placeholder="Medicamentos" />
            <h3>Possui Plano de Saúde</h3> <!-- 14 -->
            <input type="radio" id="planonao" value="Não" name="planosaude" />
            <label for="planonao"><span></span>Não</label>
            <input type="radio" id="planosim" value="Sim" name="planosaude" />
            <label for="planosim"><span></span>Sim</label>
            <div class="plano"></div>
            <input type="text" name="hospital" placeholder="Hospital Utilizado" />
            <input type="text" name="medicusado" placeholder="Medicamento Usado" />
            <input type="text" name="tipoalergia" placeholder="Tipo de Alergia" />
            <input type="text" name="contatoemergencia" placeholder="Contato na Emergência" />
            <input type="text" name="infoadicionar" placeholder="Informações Adicionais" />

            <input type="button" name="prev" class="prev acao" value="Voltar" />
            <input type="button" name="next6" class="next acao" value="Próximo" />
        </fieldset>
        <fieldset>
            <h2>Oficinas</h2>
            <label for="oficinas">Oficinas</label>
                <select name="oficinas" id="oficinas">
                    <option value=""></option>
                    <option value="ba">Ballet</option>
                    <option value="ca">Capoeira</option>
                </select>
            <h3>Ballet: R$ 30,00</h3>
            <h3>Capoeira: 30,00</h3>
            <p>Obs: Os valores contratados pelas oficinas serão incluídos nos boletos junto com as mensalidades.</p>
            <input type="button" name="prev" class="prev acao" value="Voltar" />
            <input type="submit" name="next" class="acao" value="Salvar" />
        </fieldset>
    </form>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="assets/js/functions.js"></script>
</body>
</html>