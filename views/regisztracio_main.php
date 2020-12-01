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


