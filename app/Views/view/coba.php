
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ulang Tahun</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- jumbotron -->
    <div id="fh5co-header" class="fh5co-cover" role="banner" style="background-image: url(image/bgmerah.jpg);" data-stellar-background-ratio="2">
        <section class="cardview" id="cardview">
            <div class="container">
                <div class="overlay">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="thumbnail text-center">
                            <img src="image/bg2.jpg" alt="Deliana Putri" title="Nur Siva">
                            <div class="caption">
                                
                                <!--<p><i class="glyphicon glyphicon-heart pink"></i><strong> 20 </strong> <i class="glyphicon glyphicon-heart pink"></i></p>
                                <br /> -->
                                <!-- Tombol Kirim -->

                                <p>
                                    <p>Ehh.. Ada Yang Mau Ngucapin Nihh</p><a href="ucapanku.html" class="btn btn-primary" role="button">Buka Ucapan</a>
                                </p>

                                <!-- Akhir rombol --><br />
                                <h3 class="text-center">
                                    <!-- Hitung Mundur -->
                                    <h3>Sekarang</h3>
                                    <strong>
                                        <p id="demo"></p>
                                        <script>
                                            // Set the date we're counting down to
                                            var countDownDate = new Date("May 26, 2021 00:00:00").getTime();

                                            // Update the count down every 1 second
                                            var x = setInterval(function() {

                                                // Get today's date and time
                                                var now = new Date().getTime();

                                                // Find the distance between now and the count down date
                                                var distance = countDownDate - now;

                                                // Time calculations for days, hours, minutes and seconds
                                                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                                // Output the result in an element with id="demo"
                                                document.getElementById("demo").innerHTML = days + " Hari " + hours + " Jam " +
                                                    minutes + " Menit " + seconds + " Detik ";

                                                // If the count down is over, write some text 
                                                if (distance < 0) {
                                                    clearInterval(x);
                                                    document.getElementById("demo").innerHTML = "EXPIRED";
                                                }
                                            }, 1000);
                                        </script>
                                    </strong>
                                    <h3> Menjelang Hari Spesialmu:)
                                    </h3>
                                    <br /><br />
                                </h3>
                                <!-- Akhir Hitung Mundur -->
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <!-- akhir jumbotron -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>
</body>

</html>
