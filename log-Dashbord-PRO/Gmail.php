<?php
                                session_start();
                                 if (isset($_SESSION["emailsession"]) && $_SESSION["codesession"]){
                                     $emailmailer = $_SESSION["emailsession"];
                                     $codemailer  = $_SESSION["codesession" ];
                                 }
                                 else{
                                  $emailmailer = "note email";
                                  $codemailer = "note code";
                                 }
                         
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body  style=" 
    background-color: rgb(190, 190, 190);
    display: flex;
    justify-content: center;" >
    <div class="to" style="   width: 300px;
    height: 250px;
    background-image: url('https://img.freepik.com/premium-vector/vector-seamless-blue-pattern-with-line-envelopes_182787-1331.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    font-size: 20px;
    border-radius: 12px;
    box-shadow: 0 0 10px 0.2px rgb(96, 157, 255);text-align: center;" >
      <h1 style="        color: whitesmoke;
      text-shadow: 0 0 5px black;
      text-align: center;" >code</h1>
       <div>hello <?php echo $emailmailer ?></div>
      <p style="        text-align: center;
      background-color: rgba(204, 204, 204, 0.464);" >
       
        cbasdjkbcvlkzjsxbc asdbaiusdbva sdviualdfisufvhbladsv aidsuhviuadshvl:
        <span style="        color: red;
        text-shadow: 0 0 1px black;" ><?php echo $codemailer ?></span> iuhadsfifv
      </p>
      <a href="code.html">check code</a>
    </div>
  </body>
</html>
