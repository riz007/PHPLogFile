<!DOCTYPE html>
<html lang="en" ng-app="bulkApp" ng-controller="bulkCtrl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Log File Viewer</title>

    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- <link href="js/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet"> -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/node_modules/normalize.css/normalize.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
 

    <!-- angularjs -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

  </head>
  <body>
    <div class="container">
      <div class="header clearfix">
        <h3 class="text-muted">LogFileViewer</h3>
      </div>

      <form action="" method="post">
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button name="click" class="btn btn-default click" type="submit">View</button>
            </span>
          </div><!-- /input-group -->
        </div>
      </form>

        <?php
        if(isset($_POST['click']))
        {
            $filename = "test.txt";
            $before_editing = file_get_contents($filename);

        ?>

        <div class="text-center">
          <table border=0 class="rounded-list text-justify">
            <tr>
              <td>
                <ol>
                  <li><p><?php echo "Content of the file " . $filename . " before editing: " . $before_editing . "<br>"; ?></p></li>
                </ol>
              </td>
            </tr>
          </table>
      <!-- this is for display in single-->
          <?php
              echo "Content of the file " . $filename . " before editing: " . $before_editing . "<br>";
              file_put_contents($filename, "test test test test test");
              $after_editing = file_get_contents($filename);
              echo "Content of the file " . $filename . " after editing: " . $after_editing . "<br>";
          }
          ?>
        </div>

        <div class="text-center">
          <nav>
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
        </div>

    </div> <!-- /container -->
  </body>

  <script>
    $(document).ready(function() {
    });

    // Scrolls to the selected menu item on the page
    $(function() {
      $('a[href*=\\#]:not([href=\\#])').click(function() {
          if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
              if (target.length) {
                  $('html,body').animate({
                      scrollTop: target.offset().top
                  }, 300);
                  return false;
              }
          }
      });
    });
  </script>

  </html>
