<?php
session_start();
?>
<html>
<head>
    <meta http-equiv="text/html" content="text/html"; charset="utf-8" >
    <title>Kurierowo rejetracja</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#dialog-message" ).dialog({
                modal: true,
                buttons: {
                    Ok: function() {
                        $( this ).dialog( "close" );
                    }
                }
            });
            $( "#error-message" ).dialog({
                modal: true,
                buttons: {
                    Ok: function() {
                        $( this ).dialog( "close" );
                    }
                }
            });
        } );
    </script>
</head>
<body>
<div class="naglowek">
    <h1>Usługi kurierskie </h1>
</div>
<?php
if($_POST)
	{
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $bdate=$_POST['bdate'];
    $login_registration=$_POST['login_registration'];
    $password_registration=$_POST['password_registration'];
    $dane_sa=$_POST['dane_sa'];
    if($_POST['reg'])
    {
	if(($name) && ($surname) && ($bdate) && ($login_registration) && ($password_registration))
    {
        $user=new User($name,$surname,$bdate,$login_registration,$password_registration);

        echo '<div id="dialog-message" title="Zarejestrowano">
        <p>
     <span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
        Pomyślnie zarejestrowano użytkownika
    </p>
	</div>';
    }
    if((empty($name) || empty($surname) || empty($bdate) || empty($login_registration) || empty($password_registration))&& $dane_sa=="1")
    {
        echo '<div id="error-message" title="Error">
        <p>
     <span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
        Nie wszystkie dane zostały wproawdzone
    </p>
      <p>
     <b>Wprowadź wszystkie dane i spróbuj ponownie</b>.
	</p>
	</div>';
    }
	}}
?>
<div class="login-box">
    <form action="registration.php" method="post">
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="text" placeholder="Imie" name="name">
        </div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="text" placeholder="Nazwisko" name="surname">
        </div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="date" placeholder="Data urodzenia" name="bdate">
        </div>
        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Login" name="login_registration">
        </div>

        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Hasło" name="password_registration">
        </div>
        <input type="hidden" name="dane_sa" value="1">
        <input type="submit" class="btn" value="Zarejestruj" name="reg">
    </form>
    <form action="index.php" method="get">
        <input type="submit"  class="btn" value="Powrót"/>
    </form>
<footer class="stopka">
    <p>® Projket na zaliczenie z przedmiotu "Komunikacja człowiek- komputer" Samuel Stefański </p>
    <p>Data: <?php echo date("d-m-Y");?></p>
</footer>
</body>
</html>
