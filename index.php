<!DOCTYPE html>
<html>
  <head>
    <title>Landning 1</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[if IE]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <![endif]-->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href="main.css" rel="stylesheet"/>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="imgholder">
          </div>
        </div>
      </div>
      <div class="row">
          <div class="span6 offset3">
          <div id="main-box">
            <b>Tjäna lätta pengar</b>
            <p>100% insättnings bonus</p>
            <div id="changestuff">
              <div class="step">
                <h2></h2>
                <div class="clear"></div>
                <h3></h3>
                <p>Är du över 18 år?</p>
                <select id="step1">
                  <option value="0" selected="selected">Välj ditt svar</option>
                  <option value="1">Jag är över 18år</option>
                  <option value="-1">Jag är under 18år</option>
                </select>
                <div class="clear"></div>
                <p>Gör som Lucy, och dubbla dina pengar</p>
              <button class="btn btn-success btn-large disabled" id="step1-button">Nästa</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <script>
    (function(){
      step1button = $('#step1-button');
      $('#step1').on('change', function(){
        var answer = $(this).val();
        if(answer === "0"){
         step1button.addClass('disabled');
        }else if(answer === "-1"){
          step1button.addClass('disabled');
        }else{
          step1button.removeClass('disabled');
        }
      });
      $('#changestuff')
    })();
    </script>
  </body>
</html>