<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Captura de Emails - Ramon</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body>

        <div class="text-center">
            <img src="./imagem/dinheiro1.jpg">
        </div>

        <div class="container">
            <div class="col" name="formulario">
                <form method="POST" enctype="multipart/form-data" action="email.php">
                    <div class="form-group mt-3">
                        <h1 class="text-center"><span class="badge badge-primary text-center">ADQUIRA AGORA NOSSO CURSO!</span></h1>
                        <label for="email-usuario">Endereço de e-mail</label>
                        <input type="email" class=form-control name="email" required=required>
                        <small id="emailSubtop" class="form-text text-muted">Nunca compartilharemos seu e-mail com mais ninguém.</small>
                        <input type="submit" class="btn btn-primary text-center" value="Enviar" name="enviar">
                    </div>

                </form>
            </div>
        </div>

    </body>
</html>

        