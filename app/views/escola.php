
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sistema de Gestão Escolar</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <base href="http://localhost/escola/" />

  </head>
<body>
  <form  action="app/views/inscadescola.php" method="post"><br/>
    <fieldset>
      <label>Nome </label>
      <input type="text" id="nome_escola" name="nome_escola"   required autofocus />
		           
      <label>Email Escola</label>
      <input type="email" id="email_escola" name="email_escola"   required />    
            
      <label>Telefone Escola</label>
      <input type="text" id="telefone_escola" name="telefone_escola"  placeholder="(Ex: 71 99999-9999)" required />
            
            
      <label>Endereço Completo</label>
      <input type="text" id="endereco_completo" name="endereco_completo"  required />     
            
      <label>Nome Responsável</label>
      <input type="text" id="nome_responsavel" name="nome_responsavel"  required />   
            
      <label>Email Responsável</label>
      <input type="email" id="email_responsavel" name="email_responsavel"  required />
               
      <label>Telefone Responsável (WhatsApp)</label>
      <input type="text" id="telefone_responsavel" name="telefone_responsavel"  placeholder="(Ex: 71 99999-9999)" required />
            
      <label>Quantidade Alunos</label>
      <input type="number" id="qtd_alunos" name="qtd_alunos"  required />
            
      <label>Perfil da Escola:</label>
      <select  id="perfil_escola" name="perfil_escola" required >
          <option value="">Selecione</option>
          <option value="Creche">Creche</option>
          <option value="Ensino Fundamental">Ensino Fundamental</option>
                <option value="Ensino Medio">Ensino Médio</option>
                <option value="Universidade">Universidade</option>
                <option value="Curso Livre">Curso Livre</option>
              </select>
      <button type="submit">Salvar</button>
    </fieldset>
  </form>
</body>
</html>
