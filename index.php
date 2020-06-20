<!DOCTYPE html>
<html>
<head>
	<title>My Number</title>
	<meta lang="en">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="smile.css">
	<body>
		<div class="trko">
			<form action="come.php" method="post" accept-charset="utf-8" class="trmo">
				<label for="user">Username:</label><br>
				<input type="text" name="user" autocomplete="off" autofocus><br>
				<label for="user">Password:</label><br>
				<input type="password" name="pass" autofocus><br><br>
				<label for="use">Gender:</label>
				<span>Male: </span><input type="radio" name="gender" value="male" id="use" style="font-size: 1.3em;"><span> Female: </span><input type="radio" name="gender" value="female" id="use"><br><br>
				<label for="mn">Mobile Number:</label><br>
				<input type="text" name="num"  max="12" id="mn"><br><br>
				<label for="course">Choose a Course:</label><br><br>
                <select name="course" id="course">
                <option value="None" selected>None
                </option>	
                <option value="CSE">CSE</option>
                <option value="CE">CE</option>
                <option value="ME">ME</option>
                <option value="EE">EE</option>
                </select><br><br>
                <label for="in">Annual Income:</label><br>
                <input type="number" name="income" max="100000" id="in"><br><br>
                <label for="indo">Today Date:</label><br>
                <input type="date" name="date" id="indo"><br><br>
                <input type="submit" name="submit" value="SUBMIT">
                <input type="reset" name="reset" value="RESET">

				<a href="Login.php" style="text-decoration: none;margin-left: 34px;font-size: 1.5em;cursor: pointer;padding: 12px 23px;font-family: sans-serif;border:2px solid transparent;background-color: #F3A183;color: #fff;border-radius: 5px; ">Have a Account Login Here</a>
			</form>
		</div>








</body>
</html>