<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>EAD 01 - Hudson Alves</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    </head>
    <body>

        <?php
        function vetor($peso, $altura) {
            $total = $peso / pow($altura, 2);
            return number_format($total, 2, ',', '');
        }

        function calculodata($data) {
            $data;
            list($dia, $mes, $ano) = explode('/', $data);
            $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
            $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);
            $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
            return $idade;
        }
        ?>

        
        
        <h2 class="table table-inverse">Promove Nutrição</h2>
        <h1 class="page-header">Meus Pacientes</h1>

        <form name="form1" method="POST">

            <table border='1' class="table table-inverse" >
                <thead>
                    <tr>
                        <th scope="row">Nome:</th>
                        <th>Peso(Kg)</th>
                        <th>Altura(m)</th>
                        <th>IMC</th>
                        <th>Data de Nascimento</th>
                        <th>Idade</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>John Petrucci</td>
                        <td>100</td>
                        <td>2.00</td>
                        <td><?php echo vetor(100, 2.00) ?></td>
                        <td>01/01/1980</td>
                        <td><?php echo calculodata('01/01/1980') ?>
                        </td>
                    </tr> 

                    <tr>
                        <td>John Myung</td>
                        <td>80</td>
                        <td>1.72</td>
                        <td><?php echo vetor(80, 1.72) ?></td>
                        <td>28/02/1990</td>
                        <td><?php echo calculodata('28/02/1990') ?>
                        </td>
                    </tr> 

                    <tr>
                        <td>James Labrie</td>
                        <td>54</td>
                        <td>1.64</td>
                        <td><?php echo vetor(54, 1.64) ?></td>
                        <td>10/09/1985</td>
                        <td><?php echo calculodata('10/09/1985') ?>
                        </td>
                    </tr> 

                    <tr>
                        <td>Jordan Rudess</td>
                        <td>85</td>
                        <td>1.73</td>
                        <td><?php echo vetor(85, 1.73) ?></td>
                        <td>04/09/1989</td>
                        <td><?php echo calculodata('04/09/1989') ?>
                        </td>
                    </tr>  

                    <tr>
                        <td>Mike Mangini</td>
                        <td>46</td>
                        <td>1.55</td>
                        <td><?php echo vetor(46, 1.55) ?></td>
                        <td>31/12/1978</td>
                        <td><?php echo calculodata('31/12/1978') ?>
                        </td>
                    </tr> 
                </tbody>
            </table>
        </form>
    </body>
</html>