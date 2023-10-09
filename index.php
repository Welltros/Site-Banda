<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Pesquisa de mercado</title>
</head>
<body>
    <div class="container">
    <h1> Pesquisa de mercado </h1>

    <p> Nós da empresa Cabelos & Cia. Estamos para abrir nossas portas no mercado brasileiro com a 
        tecnologia internacional. </p>
    
     <p>Gostaríamos de sua opinião sobre a calvície. Respeitando a lei LGPD, não iremos divulgar seu email.
        Quando lançarmos o produto você será avisado.
    </p>

    <form action="grava.php" method="get">
        <label for="email" class="form-label"> Qual seu email ?</label>
        <input type="email" class="form-control" id="email" name="email" required> <br><br>

        <label for="pergunta1" class="form-label"> Qual nível de importância do seu cabelo para a sua aparência ? 
            Pontue de 0 a 10 sendo:  0 - pouca importância,  10 - importa muito.</label>
        <input type="number" id="pergunta1" name="pergunta1"  class="form-control"
        required min="0" max="10"> <br><br>

        <label for="pergunta2" class="form-label"> Você teria interesse de realizar um implante capilar ?  
            Pontue de 0 a 10 sendo:
            0 - nenhum interesse,  10 - Muito interesse.</label>
        <input type="number" id="pergunta2" name="pergunta2"  class="form-control"
        required min="0" max="10"> <br><br>

        <input type="submit" value="enviar" class="btn btn-primary btn-lg">
    </form>
</div>
</body>
</html>