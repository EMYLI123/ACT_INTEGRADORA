<?php
include'includes/conecta.php';
include'includes/acciones.php';
include'includes/querys.php'
?>


<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dia de Muertos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css\estilos.css">
</head>

<body>
  <header>
    <div class="container">
      
    </div>
  </header>
  <section class="carousel">
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
       
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://blog.remitly.com/wp-content/uploads/2018/11/dia_de_los_muertos_blog.jpg" class="d-block w-100" class="img-fluid" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>Dia de muertos</h2>
            <p>El Día de Muertos es una celebración mexicana que honra a los seres queridos que han fallecido.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://th.bing.com/th/id/OIP.lr4ojJMgHxEeVfcGaH8MBwAAAA?rs=1&pid=ImgDetMain" class="d-block w-100" class="img-fluid" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>Ofrenda</h2>
            <p>Elemento que caracteriza el dia de muertos.</p>
          </div>
        </div>
        
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <section class="ms my-5">
    <h2 class="text-center my-5">¿Que es el dia de muertos?</h2>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <p>
            El Día de Muertos es una celebración mexicana que honra a los seres queridos que han fallecido. Se lleva a cabo principalmente el 1 y 2 de noviembre, coincidiendo con las festividades católicas de Todos los Santos y el Día de los Fieles Difuntos. Durante esta festividad, las familias crean altares (ofrendas) en sus hogares y en los cementerios, decorándolos con fotografías, flores, comida, y objetos que eran queridos por los difuntos..
          </p>
        </div>
        <div class="col-6">
          <img class="img-fluid" src="https://th.bing.com/th/id/R.ec20a554e221db978a2156790ff7ae43?rik=s2OGDzAPZYo3JQ&riu=http%3a%2f%2flivingmagazine.life%2fwp-content%2fuploads%2f2016%2f10%2fFiestas-populares-en-Michoacan-P%c3%a1tzcuaro-dia-de-muertos.jpg&ehk=1q7sMZ2ga%2fbeqSpqYGbL4b2kD40HRlOS8ZUiIdlA6sE%3d&risl=&pid=ImgRaw&r=0"
            alt="">
        </div>
      </div>
    </div>
  </section>
  <section class="music my-5">
    <h2 class="text-center my-5">¿Como surge?</h2>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <img src="https://i.ytimg.com/vi/QPWGa1tB_4g/maxresdefault.jpg" class="card-img-top"
              alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Origen Prehispanico</h5>
              <p class="card-text text-center">Culto a los ancestros: Las culturas indígenas creían en la continuidad de la vida y la importancia de mantener un vínculo con los muertos. Hacían rituales para recordar y honrar a sus antepasados. <br> <br>
                El ciclo de la vida: Para muchas civilizaciones mesoamericanas, la muerte no era vista como un final, sino como una transición. Los muertos continuaban existiendo en otro plan.</p>
              
            </div>
          </div>
        </div>
    </div>
    </div>
    </div>
  </section>
  <footer class="text-center py-3">
 Dia de muertos

  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>