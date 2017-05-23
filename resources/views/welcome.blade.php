<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Coming Soon</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Proza+Libre:400,400i,500,500i" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <section class="coming_soon">
        <div class="view_table">
            <div class="view_cell">
                <img src="img/logo-min.png" class="img-responsive center-block space20" style="height: 100px;">  
                <h3 class="coming_title space50"> we launching soon </h3>      
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <p class="coming_in">
                                Art lover can't wait to see what you build.
                            </p>
                        </div>
                        <div class="item">
                            <p class="coming_in">
                                first we feel then we fall
                            </p>      
                        </div>
                    </div>
                </div>
                <ul id="coming_soon" class="list-inline timer_box">
                  <li><span class="days">00</span><p class="days_text">Days</p></li>
                    <li><span class="hours">00</span><p class="hours_text">Hours</p></li>
                    <li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
                    <li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
                </ul>  
                <!-- <form class="mailchimp_form">
                    <div class="form-group">
                        <input type="email" name="mail_add" class="form-control" placeholder="Enter Email Address" required="true">
                        <button type="submit" class="btn"> get notified! </button>
                    </div>
                </form> -->
            </div>
        </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>

    <script type="text/javascript">
        $('#coming_soon').countdown({
            date: '8/06/2017 23:59:59',
            days: 'Days'
        }, function () {
            alert('Done!');
        });
    </script>
  </body>
</html>