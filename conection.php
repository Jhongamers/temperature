<?php

$json = json_decode(file_get_contents('https://api.hgbrasil.com/weather?key=your_api8&user_ip=user_ip'),true);
echo 'cidade:'.$json['results']['city'].'<br>';
echo 'descrição:'.$json['results']['description'].'<br>';
echo'cidade:'.$json['results']['city'].'<br>';
echo 'velocidade do vento:'.$json['results']['wind_speedy'].'<br>';
echo 'temperatura:'.$json['results']['temp'].'°C';
echo '<img src=imagens/'.$json['results']['img_id'].'.png></img>';
?>
<style>
table tr th{
 border: 1px solid black;
 text-align:center;
}

    </style>
<table align="center"> 
<tr>
<th>Cidade: </th>
<th><?php echo $json['results']['city']; ?> </th>
</tr>
<tr>
<th>Descrição: </th>
<th><?php echo $json['results']['description']; ?> </th>
</tr>
<tr>
<th>Velocidade Do Vento: </th>
<th><?php echo $json['results']['wind_speedy']; ?> </th>
</tr>
<tr>

<th class="center"><img src="imagens/<?php echo $json['results']['img_id']; ?>.png" ></img> </th>
</tr>
</table>
