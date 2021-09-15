<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Web 4</title>
</head>
<body>
    <?php
        error_reporting(E_ERROR | E_PARSE);
        // Oi professor, não sei se tá lendo isso mas so to passando pra dizer q eu ia botar comentários explicando os códigos e um CSS pra deixar bonitinho mas sinceramente eu to completamente destruído ent priorizei função doq ~bonitez (╥﹏╥)
        
        $nota1 = $_GET['nota1'] . '<br>';
        $nota2 = $_GET['nota2'] . '<br>';
        $nota3 = $_GET['nota3'] . '<br>';
        $notas = array($nota1, $nota2, $nota3);

        $notaMedia = array_sum($notas) / 3;
        if ($notaMedia >= 7 && $notaMedia <= 10) {
			echo "1 - Média das notas do(a) aluno(a): " . $notaMedia . " - Aprovado.<br><br>";
		} else if ($notaMedia >= 4 && $notaMedia < 7) {
			echo "1 - Média das notas do(a) aluno(a): " . $notaMedia . " - Elegível a recuperação.<br><br>";
		} else if ($notaMedia >= 0 && $notaMedia < 4) {
			echo "1 - Média das notas do(a) aluno(a): " . $notaMedia . " - Reprovado.<br><br>";
		}

        /////////////////////////////////////////////////////////
        
        $mesNum = $_GET['mesNum'];
        $mesNome = $_GET['mesNome'];

        switch($mesNum) {
            case 1:
                $mesNum = "Janeiro";
                if (strcasecmp($mesNome, $mesNum) == 0) {
                    echo "2 - Mês correto.<br><br>";
                }
                break;
            case 2:
                $mesNum = "Fevereiro";
                if (strcasecmp($mesNome, $mesNum) == 0) {
                    echo "2 - Mês correto.<br><br>";
                }
                break;
            case 3:
                $mesNum = "Março";
                if (strcasecmp($mesNome, $mesNum) == 0) {
                    echo "2 - Mês correto.<br><br>";
                }
                break;
            case 4:
                $mesNum = "Abril";
                if (strcasecmp($mesNome, $mesNum) == 0) {
                    echo "2 - Mês correto.<br><br>";
                }
                break;
            case 5:
                $mesNum = "Maio";
                if (strcasecmp($mesNome, $mesNum) == 0) {
                    echo "2 - Mês correto.<br><br>";
                }
                break;
            case 6:
                $mesNum = "Junho";
                if (strcasecmp($mesNome, $mesNum) == 0) {
                    echo "2 - Mês correto.<br><br>";
                }
                break;
            case 7:
                $mesNum = "Julho";
                if (strcasecmp($mesNome, $mesNum) == 0) {
                    echo "2 - Mês correto.<br><br>";
                }
                break;
            case 8:
                $mesNum = "Agosto";
                if (strcasecmp($mesNome, $mesNum) == 0) {
                    echo "2 - Mês correto.<br><br>";
                }
                break;
            case 9:
                $mesNum = "Setembro";
                if (strcasecmp($mesNome, $mesNum) == 0) {
                    echo "2 - Mês correto.<br><br>";
                }
                break;
            case 10:
                $mesNum = "Outubro";
                if (strcasecmp($mesNome, $mesNum) == 0) {
                    echo "2 - Mês correto.<br><br>";
                }
                break;
            case 11:
                $mesNum = "Novembro";
                if (strcasecmp($mesNome, $mesNum) == 0) {
                    echo "2 - Mês correto.<br><br>";
                }
                break;
            case 12:
                $mesNum = "Dezembro";
                if (strcasecmp($mesNome, $mesNum) == 0) {
                    echo "2 - Mês correto.<br><br>";
                }
                break;
            default: echo "2 - Mês incorreto.<br><br>"; break;
                    
        }

        /////////////////////////////////////////////////////////

        $numPri = $_GET['numPri'];
        $numSeg = $_GET['numSeg'];
        
        echo "3 - Resultado: ";
        for($c = 1; $c < $numPri; $c++) {
            if ($c % $numSeg == 0) {
                $ar = [$c];
                echo $c . ", ";
            }
        }
        echo $numPri . ".<br><br>";
        
    
    ?>
    <div>
        <p>
        <hr>
        Unime - União Metropolitana de Educação e Cultura<br>
        Curso: Bacharelado em Sistemas de Informação<br>
        Disciplina: Programação Web II<br>
        Professor(a): Pablo Ricardo Roxo Silva<br>
        Aluno(a): Mikael Magalhães Ramos<br><br>
        Bem vindo ao mundo de trabalhos web sem CSS, o mundo preto e branco!<br><br><br>
        </p>
        
        <p>
            1 - Crie uma aplicação em PHP para controlar as notas de um aluno:<br>
        </p>
        <form>
            <p>Insira as notas do(a) aluno(a):</p>
            <input type="number" name="nota1" placeholder="Nota 1"><br>
            <input type="number" name="nota2" placeholder="Nota 2"><br>
            <input type="number" name="nota3" placeholder="Nota 3"><br><br>
            <input type="submit" name="submitNota" value="Calcular">
        </form><br><br>
        
        <p>
            2 - Crie uma aplicação em PHP que receberá dois valores do usuário: um valor numérico e um de texto:<br>
        </p>
        <form>
            Insira o número do mês: <input type="number" name="mesNum"><br>
            Insira o nome do mês: <input type="text" name="mesNome"><br><br>
            <input type="submit" name="submitNota" value="Enviar">
        </form><br><br>

        <p>
        3 - Crie uma aplicação em PHP que receberá dois valores numéricos inteiros do usuário. Então, a
        aplicação deve verificar em todos os números naturais até o primeiro número, quais números são divisíveis
        pelo segundo número.
        </p>
        <form>
            Insira o primeiro número: <input type="number" name="numPri"><br>
            Insira o segundo número: <input type="number" name="numSeg"><br><br>
            <input type="submit" name="submitNota" value="Enviar">
        </form><br><br>
        
    </div>
    
</body>
</html>