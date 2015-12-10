<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<h1>登录！！！</h1>
	<form action="http://localhost:8088/ThinkPHPTest/login/login" method="post">
		<table>
			<tr>
				<td>name:</td>
				<td><input type="text" id="user_id" name="user_id"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" id="user_pwd" name="user_pwd"></td>
			</tr>
			<tr>
				<td><input type="submit"></td>
			</tr>
		</table>
	</form>

</body>
</html>