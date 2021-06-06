<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
      include_once "../php/config.php";
      $outgoing_id = $_SESSION['unique_id'];
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$outgoing_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $publicKeyReciver = $row['email'];
          }
    }    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleHacker.css">
    <script src="app.js"></script>
    <title>Document</title>
</head>
<body>
    <form class="my-form">
     
        <div class="container">
            <h1 class="title">Hacker the message here</h1>
         
          <ul>
            <li>
                <!-- <div class="grid grid-2"> -->
                <label>Public key of sender </label>
                <textarea placeholder="Public key of sender ... "><?php echo "mazal mlgitch " ?></textarea>
                <label>Public key of Reciver </label>
                <textarea placeholder="Public Key of reciver ... "><?php echo $publicKeyReciver ?></textarea>
              <!-- </div> -->
            </li> 
            <li>
                <label>The key of AES crypter here</label>
                <textarea placeholder="Key-AES Crypter here ... "><?php ?></textarea>
            </li>     
            <li>
              <!-- <div class="grid grid-2"> -->
              <label>Message Crypter here </label>
              <textarea placeholder="Message Crypter here ... "></textarea>
              <label> Signautre here </label> <textarea> Signature  Crypter here ... "></textarea>
              <!-- </div> -->
            </li>    
              
            
            <li>
                <div class="grid grid-3">
                    <button class="btn-grid" type="submit" >
                      <span class="back">
                        <img src="IMG_SRC" alt="">
                      </span>
                      <span class="front">Envoyer  --> </span>
                    </button> 
                  </div>
            </li>
          </ul>
        </div>
      </form>
      </body>
</html>