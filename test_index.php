<!DOCTYPE html>
<html lang="de">
  <head>
      <title>Tobias' Test Site f&uuml;r&Aacute;s Web-Engineering MOOC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tobias.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        <div class="nav navbar-inverse navbar-fixed-top" role="navigation">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="simple.html">Einfache Suche</a></li>
                <li><a href="animated.html">Animierte Suche</a></li>
            </ul>
        </div>
    <div class="container">
        
        <div class="page-header">
            <h1>Hallo Welt! <small>Tobias freut sich &uuml;ber deinen Besuch!</small></h1>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://code.jquery.com/jquery.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
        </div>
        <div class="row">
            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                <div class="jumbotron minsize">
                    <form action="http://de.wikipedia.org/wiki/Spezial:Suche" target="_blank">
                        <fieldset class="right">
                            <legend class="left">Wikipedia Suche</legend>
                            <input type="text"   name="search" value="" size="20"/>
                            <input type="submit" name="go" value="Artikel"/>
                            <input type="submit" name="fulltext" value="Volltext Suche"/>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                <div class="jumbotron minsize">
                    <form action="animated.html">
                        <fieldset class="right">
                            <legend class="left">Du magst Effekte?</legend>
                            <input type="submit" name="gohere" value="Versuch das!"/>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
