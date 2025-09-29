<html>

<title>Manipulação de dados em PHP</title>
<body>
<form  name = "form1" method = "post">

<fieldset>
<legend>Cadastro de Contas</legend>    
usuario: <br>
<input type="text" name = "txt_usuario" size = "30"> <br>
E-mail: <br>
<input type="text" name = "txt_email" size = "30"> <br>
Senha: <br>
<input type="password" name = "txt_senha" size = "30"> <br>
Conferir Senha: <br>
<input id="conf_senha" type="password" name="conf_senha" size="30"><br><br>  
  

<input type= "submit" name = "bt_incluir" value = "Cadastrar" onClick =  "document.form1.action='cadastrar.php'">


</fieldset>
</form>    
</body>
</html>