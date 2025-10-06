
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Funcionários</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
      
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Lora', serif;
            background-color: #fffce6; 
            color: #2c2c2c;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

  
        .container {
            background: #fff9c4;
            border: 2px solid #d4b106;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(212, 177, 6, 0.3);
            width: 500px;
            padding: 30px;
        }

       
        legend {
            font-size: 22px;
            font-weight: 700;
            color: #2c2c2c;
            background-color: #ffd700;
            border-radius: 6px;
            padding: 8px 15px;
            text-align: center;
            margin-bottom: 20px;
        }

        fieldset {
            border: 2px solid #d4b106;
            border-radius: 10px;
            background-color: #fffce6;
            padding: 20px;
        }

        label {
            display: block;
            font-weight: 600;
            margin: 12px 0 5px;
        }

     
        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #d4b106;
            border-radius: 6px;
            background-color: #fffef0;
            color: #2c2c2c;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="date"]:focus {
            background-color: #ffffff;
            border: 2px solid #d4b106;
            box-shadow: 0 0 8px rgba(212, 177, 6, 0.4);
            outline: none;
        }

       
        input[type="submit"] {
            background-color: #2c2c2c;
            color: #ffd700;
            padding: 10px 20px;
            border: 1px solid #d4b106;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            margin-top: 20px;
            transition: all 0.3s ease;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #1a1a1a;
            color: #ffdf40;
            box-shadow: 0 0 8px rgba(212, 177, 6, 0.6);
        }

        a {
            display: inline-block;
            margin-top: 25px;
            color: #2c2c2c;
            text-decoration: none;
            font-weight: 600;
            border-bottom: 2px solid #d4b106;
            transition: all 0.3s ease;
        }

        a:hover {
            color: #d4b106;
            border-bottom-color: #2c2c2c;
        }
    </style>
</head>

<body>
    <div class="container">
        <form name="form1" method="post" action="gravar.php">
            <fieldset>
                <legend>Cadastro de Funcionários</legend>

                <label for="N_Registros">Nº Registro:</label>
                <input type="number" id="N_Registros" name="N_Registros" placeholder="Ex: 1234">

                <label for="Nome_Func">Nome do Funcionário:</label>
                <input type="text" id="Nome_Func" name="Nome_Func" placeholder="Mateus da Silva">

                <label for="data_admissao">Data de Admissão:</label>
                <input type="date" id="data_admissao" name="data_admissao">

                <label for="cargo">Cargo:</label>
                <input type="text" id="cargo" name="cargo" placeholder="Auxiliar Administrativo">

                <label for="quant_salarios">Quantidade de Salários Mínimos:</label>
                <input type="number" id="quant_salarios" name="quant_salarios" placeholder="2">

                <input type="submit" name="bt_verificar" value="Cadastrar" onclick="document.form1.action='gravar.php'">

                <center>
                    <a href="listagem.php">Visualizar Demonstrativos de Pagamentos</a>
                </center>
            </fieldset>
        </form>
    </div>
</body>
</html>

