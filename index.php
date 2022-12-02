<?php
  $con = mysqli_connect('localhost','root','','php_chat');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Live Chat</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


        <div class="warpper clr">

            <header class="headsection clr">
                <h2>Live chat-box for Bangladeshi boy's </h2>
            </header>


            <section class="content clr">
                <div class="box">
                    <ul class="nav">


                  <?php
                    $sql = "SELECT * FROM chat_box ORDER BY id DESC";
                    $query = mysqli_query($con,$sql);
                    while ($Cdata = mysqli_fetch_array($query)) {
                      //print_r($Cdata);
                    

                  ?>


                      <li><span><?php echo $Cdata['time'];?></span> . <b><?php echo $Cdata['name'];?></b> <?php echo $Cdata['body'];?></li>


                <?php } ?>

                    </ul>
                </div>

                <div class="shoutform clr">

                  <?php
                    if (isset($_POST['submit'])) {
                      $name = mysqli_real_escape_string($con,$_POST['name']);
                      $body = mysqli_real_escape_string($con,$_POST['body']);
                      date_default_timezone_set('Asia/Dhaka');
                      $time = date('h:i:s a', time());
                      //print_r($_POST);

                      $sql = "INSERT INTO chat_box(name,body,time) VALUES('$name','$body','$time')";
                      $query = mysqli_query($con,$sql);
                      header("location:index.php");
                    }

                  ?>

                    <form action="" method="post">
                        <table>

                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="name" required placeholder="Enter your name">
                                </td>
                            </tr>

                            <tr>
                                <td>body</td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="body" required placeholder="Type your message">
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <input type="submit" name="submit" value="shout it">
                                </td>
                            </tr>


                        </table>
                    </form>
                </div>


            </section>

            <footer class="footsection clr">
                <h4>&copy; Copyright BdchatBox 2016</h4>
            </footer>

        </div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
