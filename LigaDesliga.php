<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        
  <title>Gravidade</title>
  <style>
  .a {
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    font-size: 50px;
    text-align: center;
    background-color:darkgray;

  }
  </style>
  <h1 class="a">Defina a gravidade do paciente</h1>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <style>
  #draggable {
    width: 220px;
    height: 40px;
    background: gray;
    color: white;
    font-size: 28px;
  }
  </style>
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
 
<div id="draggable">Nome do paciente</div>
 
<script>
$( "#draggable" ).draggable();
</script>
<br> <br>
<style>
table, #verde {
    border: 10px solid rgb(0, 0, 0);
    background-color: green;
    font-size: 36px;
    
}
table, #amarelo  {
    border: 10px solid rgb(0, 0, 0);
    background-color: yellow;
}
table, #vermelho {
    border: 10px solid rgb(0, 0, 0);
    background-color: red;
}
</style>
</head>



<table id="myTable" >
  <tr>
    <td id="verde">Pouca Urgência</td>
    <tr></tr>
    <br>
    <th id="amarelo">Urgência</th>
    <tr></tr>
    <br>
    <th id="vermelho">Emergência</th>

</table>
<br> 

<script>
function myFunction() {
    var x = document.getElementById("myTable").rows[0].cells[0];
    x.innerHTML = "<input type='text' >";
}
</script>
</body>
</html>
