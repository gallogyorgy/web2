<h2>Belépés</h2>
<form action="<?= SITE_ROOT ?>beleptet" method="post">
    <label for="login">Felhasználó:</label><input type="text" name="login" id="login" required pattern="[a-zA-Z][\-\.a-zA-Z0-9_]{3}[\-\.a-zA-Z0-9_]+"><br>
    <label for="password">Jelszó:</label><input type="password" name="password" id="password" required pattern="[\-\.a-zA-Z0-9_]{4}[\-\.a-zA-Z0-9_]+"><br>
    <input type="submit" value="Küldés">
</form>

<h2>Regisztráció</h2>
<form action="<?= SITE_ROOT ?>regisztral" method="post">

<label for="">Vezetéknév:</label><input type="text" name="csaladnev" required><br>
<label for="">Keresztnév:</label><input type="text" name="utonev" required><br>
 <label for="">Felhasználónév:</label>
 <input type="text" name="felhasznalonev" required>
 <br>
 <label for="">Jelszó:</label>
 <input type="password" name="jelszo" required>
 <br>
 <label for="">Jelszó ismét:</label>
 <input type="password" name="jelszo2" required>
 <br>
 <input type="submit" value="küldés">
 </form>
 <h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>