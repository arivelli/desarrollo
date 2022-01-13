<?php   

$txName="";
$rdgLanguaje="";

$chkphp="";
$ckhtml="";
$chkcss="";
$chkjavascript="";
$chkRuby="";
$chkGo="";

if ($_POST ){
    $txName=  (isset($_POST['txName']))?$_POST['txName']:"";
    $rdgLanguaje= (isset($_POST['txLanguaje']))?$_POST['txLanguaje']:"";

    $chkphp= (isset($_POST['chkphp'])=="si")?"checked":"";
    $chkhtml= (isset($_POST['chkhtml'])=="si")?"checked":"";
    $chkcss= (isset($_POST['chkcss'])=="si")?"checked":"";
    $chkjavascript= (isset($_POST['chkjavascript'])=="si")?"checked":"";
    $chkRuby= (isset($_POST['chkRuby'])=="si")?"checked":"";
    $chkGo= (isset($_POST['chkGo'])=="si")?"checked":"";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>

<?php if ($_POST) { ?>
<strong> Hello </strong>: <?php echo $txName;?>
<br/>
<strong> Your languaje is: </strong>: <?php echo $rdgLanguaje;?>
<?php } ?>

<br/>
<br/>
<br/>

<form action="Desafio14.php" method="post">

Name: 
<input value="<?php echo $txName;?>" type="text" name="txName" id="">
<br/>
<br/>
<br/>
<br/>

¿You like?: <br/>
<br/> php:<input type="radio"<?php echo ($rdgLanguaje=="php")?"checked":"";?> name="txLanguaje" value="php"id=""><br/>
<br/> html:<input type="radio"<?php echo ($rdgLanguaje=="html")?"checked":"";?> name="txLanguaje" value="html"id=""><br/>
<br/> css:<input type="radio"<?php echo ($rdgLanguaje=="css")?"checked":"";?> name="txLanguaje" value="css"id=""><br/>
<br/> javascript:<input type="radio"<?php echo ($rdgLanguaje=="javascript")?"checked":"";?> name="txLanguaje" value="javascript"id=""><br/>
<br/> Ruby:<input type="radio"<?php echo ($rdgLanguaje=="Ruby")?"checked":"";?> name="txLanguaje" value="Ruby"id=""><br/>
<br/> Go:<input type="radio"<?php echo ($rdgLanguaje=="Go")?"checked":"";?> name="txLanguaje" value="Go"id=""><br/>

<br/>
<br/>

 You are learning... <br/>
 <br/> php:<input type="checkbox"  <?php echo $chkphp ?> name="chkphp"  value="si" id="">
 <br/> html:<input type="checkbox"  <?php echo $chkhtml ?> name="chkhtml" value="si"  id="">
 <br/> css:<input type="checkbox"  <?php echo $chkcss ?> name="chkcss"  value="si" id="">
 <br/> javascript:<input type="checkbox"  <?php echo $chkjavascript ?> name="chkjavascript"  value="si" id="">
 <br/> Ruby:<input type="checkbox"  <?php echo $chkRuby ?> name="chkRuby"  value="si" id="">
 <br/> Go:<input type="checkbox"  <?php echo $chkGo ?> name="chkGo"  value="si" id="">
 
 <br/>
 <br/>
 <br/>

<input type="submit" value="Send information">

</form>

    
</body>
</html>
