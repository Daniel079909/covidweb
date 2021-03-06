<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Varela+Round&display=swap"
        rel="stylesheet">
    <title>COVID-19</title>
    <style>
        * {
            margin: 0;
            padding: 0;  
        }

        body {
            background-color: white;
            font-family: 'Roboto', sans-serif;

            font-family: 'Varela Round', sans-serif;
            margin: 0;
            padding: 0;
        }

        .main-container {
            height: 100vh !important;
        }

        .container-info {
            min-height: 100vh;
            margin: 5100;
            padding: 1000;
            background-color: rgb(91, 179, 238);
        }

        .img {
            width: 100vh;
            height: 100vh;
        }

        .logo-container {
            display: block;
           margin-left: auto;
             margin-right: auto;
          width: 50%;
        }
    </style>
</head>

<body>
    <div class="main-container container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="container-info text-center text-md-start text-white px-5">
                    <div class="logo-container">
                        <img class="mt-5 logo" height="150vh"
                            src="https://siaaf.unl.edu.ec/static/img/logo.png">
                    </div>
                    <div class="my-2 fs-1 fw-bolder">COVID-19. Predictor de riesgo de mortalidad</div>
                    <div class="my-2 fst-italic">Proyecto de Machine Learning</div>
                    <div class="my-2 fst-italic">Por Mario Orellana/Daniel Pati??o</div>
                    <div class="my-2 fs-1 fw-bolder">Tu salud es lo m??s importante.</div>
                    <div class="my-2">??C??mo funciona el test? Utilizamos una red neuronal artificial entrenada con una compilaci??n de datos publica del INS ( Instituto Nacionale de Salud ) del pais de Mexico
                        que contiene casos reales de personas que lamentablemente padecieron la enfermedad de COVID-19. Posteriormente te ofrecemos una predicci??n de tu riesgo de mortalidad.</div>
                    <div class="btn-container" id="start-test">
                        <button type="button" class="btn btn-light">Realizar test</button>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block img-container col-xs-12 col-md-6">
                <img class="img"
                    src="https://media.cnnchile.com/sites/4/2021/01/gente-lucha-covid-19-pandemia-coronavirus-nuevo-coronavirus-2019-ncov-covid-19-personas-mascarilla-medica-diy-concepto-coronavirus_131454-243.jpg"
                    alt="hero">
            </div>
        </div>
    </div>

    <script>
      const btnTest = document.getElementById('start-test');
      btnTest.addEventListener('click', function(){
        window.location.href = '/test';
      });
    </script>
</body>


</html>