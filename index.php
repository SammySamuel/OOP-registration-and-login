<?php
session_start();
?>

<html>
<head>
    <meta http-equiv="text/html" content="text/html"; charset="utf-8" >
    <title>Kurierowo</title>
    <link href="style.css" rel="stylesheet"
</head>
<body>
<div class="naglowek">
    <h1>Usługi kurierskie </h1>
</div>
<?php
$connect=new mysqli("localhost","root","root", "baza");
if ($connect->connect_errno!=0)
{
    echo "Error: ".$connect->connect_errno;
}
else
{
    if($_POST)
    {
        $login=$_POST['username'];
        $password=$_POST['password'];
        $dane_sa=$_POST['dane_sa'];
        if($_POST['log'])
        {
            if(!empty($login) && !empty($password) )
            {
                $rezult=$connect->query("Select * Form user WHERE login='".$login."' and password='".$password."' ");

    }
            if((empty($name) || empty($surname) )&& $dane_sa=="1")
            {

            }
        }}}
?>
if(!empty($_SESSION['log']) && !empty($_SESSION['password']))
{
    echo'<div class="menu-box">
        <form action="Nadaj.php" method="post">
            <input type="submit" class="btn" value="Nadaj Przesyłkę" >
            <br>
            </form>
         <form action="Sledz.php" method="post">  
            <input type="submit" class="btn" value="Śledz przesyłki" >
            </form>
    </div>
    <a href="./?logout=1">Wyloguj z bazy</a>';

}
else {
    echo'
    <div class="login-box">
        <form action="index.php" method="post">
        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username">
        </div>

        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password">
        </div>

        <input type="submit" class="btn" value="Zaloguj" name="log">
        </form>
        <form action="registration.php" method="post">
            <input type="submit" class="btn" value="Zarejetruj">
        </form>
    </div>';
}
$logout=$_GET['logout'];
if($logout==1)
{
    session_unset();
    session_destroy();
    header("Location: ./");
}
?>
<footer class="stopka">
    <p>® Projket na zaliczenie z przedmiotu "Komunikacja człowiek- komputer" Samuel Stefański </p>
    <p>Data: <?php echo date("d-m-Y");?></p>
</footer>
</body>
</html>
