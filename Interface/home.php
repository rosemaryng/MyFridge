<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .div_login {
          float: left;
        }
        body {

        }

        h1 {

            font-family: helvetica;
            text-align: center;
            font-size: 30px;
        }

        p1 {
            font-family: helvetica;
            font-size: 20px;
            text-align: left;
        }

        .form_label{

        }
    </style>

</head>
<body>
  <?php
  require_once 'dbcon.php';

  session_start();
  if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $_SESSION['username'] = $username;
  } else {
    $username = $_SESSION['username'];
  }

  /* Item added */
  if (isset($_POST['msg'])) {
    $link->query("INSERT INTO messages (user,item, quantity, expiration, category)
VALUES ('$username','{$_POST['msg']}', '{$_POST['qty']}', '{$_POST['expr']}',
  '{$_POST['ctgry']}')");

  }

  /* Item deleted */
  if (isset($_GET['take'])) {

      $link->query("DELETE FROM messages WHERE mes_id = {$_GET['take']}");

  }


   ?>
<h1>Welcome <?=$username?></p1><br /><br />

<div class="div_login">
      <form method="POST" action="home.php">
        <div>
          <div style="position: center;" class="form_label">
            <label>Item:</label>
          </div>
          <input style="position: center;" class="login_input" type="text" name="msg" />
        </div>
        <div>
          <div style="position: center;" class="form_label">
            <label>Quantity:</label>
        </div>
          <input style="position: center;" class="login_input" type="text" name="qty" />
        </div>
        <div>
          <div style="position: center";class="form_label">
            <label>Expiration date:</label>
        </div>
          <input style="position: center"; class="login_input" type="text" name="expr" />
        </div>
        <div>
          <div style="position: center";class="form_label">
            <label>Category:</label>
        </div>
          <input style="position: center"; class="login_input" type="text" name="ctgry" />
        </div>
        <input type="submit" name="Login" value="Submit" class="myButton" /><br /><br />
      </form>
</div>
      <table class="t"></h1>
<p1><tr><th>Who</th><th>Item</th><th>Quantity</th>
  <th>Expiration Date</th><th>Category</th><th>Action</th></tr>
  <?php
   $res = $link->query("SELECT * FROM messages");

  while ($line = $res->fetch_object()) {
    echo "<tr><td>{$line->user}</td><td>{$line->item}</td>
    <td>{$line->quantity}</td><td>{$line->expiration}</td>
    <td>{$line->category}</td>
    <td><a href=\"home.php?take={$line->mes_id}\">Take</a></button></tr>";
  }

  ?>
  </table>

  <form  method="POST" action="index.php">
    <button class = "myButton">Log Out</button>
  </form>
<br>
</body>
</html>
