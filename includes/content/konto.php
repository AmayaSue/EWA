<html>
  <section id="formular">
  <hr>
  <p> Anmelden: </p> 
    <form acion="api/getFormular.php" method="post">
      <fieldset>
        <label>E-Mailadresse:</label> 
        <input type="email" name="email" required> <br>
        <label>Passwort:</label>
        <input type="password" name="psw" required> 
        <input type="submit" value="Absenden">
      </fieldset>
     </form> 
  <hr>
  <p> Registrieren: </p>
    <form acion="api/getFormular.php" method="post">
      <fieldset>
        <label> Geburtsdatum: </label>
        <input type= "date" name="gebdatum" required> <br>
        <label> Name:</label>
        <input type="text" name="name"  required pattern=".{2,}"> <br>
        <label> Vorname: </label>
        <input type= "text" name="vorname" required pattern=".{2,}"> <br>
        <label> E-Mailadresse:</label> 
        <input type="email" name="email" required> <br>
        <label> Homepage:</label>
        <input type="url" name="kunden_url"> <br>
        <label> Passwort:</label>
        <input type="password" name="psw" required>
        <input type="submit" value="Absenden">
      </fieldset>
      
    </form >
  <hr>
  </section>
</html>

