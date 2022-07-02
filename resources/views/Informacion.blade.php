<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Colegio de profesionistas </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="asset({img/taller})" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/f687c855f2.js" crossorigin="anonymous"></script>
        


    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="{{asset('image/logo2.png')}}" alt="logo" width="7%" height="auto" margin_left=auto margin_right= auto>
            <a class="navbar-brand"><h5>COLEGIO DE PROFESIONISTAS COMPARTIR EL CONOCIMIENTO A.C.</h5></a>
            <br>
            <div class="container px-lg-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    </ul>
                    
                </div>
        </nav>

    </div>
    <br>
    <center>
    <h3>¿Quiénes somos?</h3>
    
    <blockquote class="blockquote" type="text-justify">
        <blockquote class="blockquote">
         <p>El Colegio es un esfuerzo multidisciplinario de la sociedad civil encaminado a profesionalizar a sus miembros con el objeto de estar al servicio de las entidades de nuestro país..</p> 
    </blockquote>
</center>
    <br>
    <center>
    <h3>Organigrama del Colegio de Profesionistas</h3>
    <br>
    <embed src="image/Organigrama.pdf" type="application/pdf" width="85%" height="565px" />
    <br>
</center>
    <style>
        form{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .btn-form{
            box-sizing: border-box;
            margin-top: 30px;
        }
        .fa-scale-balanced ,.fa-book, .fa-file-signature, .fa-people-line, .fa-users-between-lines, .fa-people-group, .fa-users-gear {
        
            font-size: 8ch;
        }
       
        .col-xxl-4{
            width: 30%;
            margin-left: auto;
            margin-right: auto;
        }
        .feature{
            height: 10rem;
        width: 10rem;
        font-size: 8ch;
        background-color: rgb(65, 9, 117) !important;
        }
    
        .bg-dark {
            --bs-bg-opacity: 1;
         background-color: rgb(65, 9, 117) !important;
        }
        .bg-orange{
            background-color: rgb(184, 129, 12) !important;
        }
    </style>

<main class="py-4">
    @yield('content')
    </main>
    <!-- Footer-->
    <footer class="py-5 bg-orange">
    <h4><div class="container"><p class="m-0 text-center text-black">INFORMACIÓN DE CONTACTO ADICIONAL:</p></div></h4>
    <br>
    <center>
    <a class="bi bi-telephone-plus fa-1x " aria-hidden="true" span style=" color: black;"> 0449512856280</a>
    <br>
    <a class="bi bi-google fa-1x" aria-hidden="true" span style=" color: black;"> presidencia.cpcc@gmail.com</a>
    </center>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    
    </body>
    
    </html>
    