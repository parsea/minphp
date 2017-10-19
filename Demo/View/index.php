<!DOCTYPE html>
<html lang="zh-ch">
<head>
    <meta charset="utf-8">
    <title>MinPHP Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MinPHP Demo">
    <meta name="author" content="renpper@163.com">
</head>
<body>
	<h1><?echo $title?></h1>
	<h3>以下内容来自数据库</h3>
	<table>
	<tr>
		<td width="50px">id</td>
		<td width="100px">name</td>
		<td width="250px">url</td>
		<td width="350px">info</td>
	</tr>
	<tr>
		<td><?echo $config['id']?></td>
		<td><?echo $config['name']?></td>
		<td><?echo $config['url']?></td>
		<td><?echo $config['info']?></td>
	</tr>
	</table>

</body>
</html>
