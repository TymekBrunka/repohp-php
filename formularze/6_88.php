<!DOCTYPE HTML>
<html>
<head>
<title>Formularz językowy</title>
<meta charset="UTF-8">
<style>
#wyb {
 font-weight: bold;
 font-size: 12pt;
}
</style>
</head>
<body>
<form action="skrypt_form1.php" method="post">
Nazwisko i imię:<br>
<input type="text" name="nazw" value=" " size="40"><br>
<p id="wyb">Wybór języka:</p>
<select name="języki[]" multiple>
<option value="Język angielski">Język angielski</option>
<option value="Język niemiecki">Język niemiecki</option>
<option value="Język francuski">Język francuski</option>
<option value="Język włoski">Język włoski</option>
<option value="Język rosyjski">Język rosyjski</option>
<option value="Język hiszpański">Język hiszpański</option>
</select>
<p><input type="submit" value="Wyślij" name="wyslij"></p>
</form>
</body>
</html>