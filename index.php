<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio jQuery</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/filter.js"></script>
    <script>
      $( function() {
        $( "#portfolio" ).sortable({stop: function(){
            console.log('u just dropped img');
            
         }
       });
        $( "#portfolio" ).disableSelection();
      } );
  </script>
</head>
<body>
    <div class="header">
      <h1>Portfolio</h1>
    </div>
    <div id="overlay"></div>
    <div id="frame">
      <table id="table">
        <tr>
          <td id="left">
            <img src="/images/left.png" alt="">
          </td>
          <td id="right">
            <img src="/images/right.png" alt="">
          </td>
        </tr>
      </table>
        <img id="main" src="" alt="">
        <div id="description">
          <p></p>
        </div>
      </div> 
    <div class="wrapper">
      <ul id="portfolio">
       Categories: 
        <ul id="filter" class="category">
          <li>Winter</li>
          <li>Baby</li>
          <li>Grow</li>
        </ul>
        <?php include_once('list.html'); ?>
      </ul>
    </div>
</body>
</html>