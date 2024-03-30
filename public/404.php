<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>404 - Page not found</title>
<style type="text/css">
*{
margin:0;
padding:0;
box-sizing:border-box;
}
.error{
width:100vw;
height:100vh;
color:#ffffff;
background-color:#BBB;
display:flex;
justify-content:center;
align-items:center;
flex-direction:column;
}
.error > h2{
text-align:center;
text-transform:uppercase;
font-family:sans-serif;
color:#ffffff;
font-weight:400;
letter-spacing:1px;
margin:10px 0px;
}
.error > button {
margin:10px 0px;
color:#fff;
padding:8px 18px;
background-color:#444FFF;
font-size:16px;
outline:none;
border:none;
box-shadow:-2px -2px 0px #FFF;
transition:all 0.3s ease-in;
font-weight:bolder;
letter-spacing:2px;
text-transform:uppercase;
border-radius:6px;
}
.error button:hover{
color:#444FFF;
background-color:#FFF;
box-shadow:2px 2px 0px #444FFF;
}
</style>
</head>
<body>
<div class="error">
<h2>404 | Page not found</h2>
<button onclick="goBack();">Go Back</button>
</div>
<script type="text/javascript">
function goBack(){
window.history.back();
}
</script>
</body>
</html>
