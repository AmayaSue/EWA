<html>
  
<p>Kontakt:</p>

  <form acion="api/getFormular.php" method="post">
    <fieldset>
      <label> Name:</label>
      <input type="text" name="name"  required pattern=".{2,}"> <br>
      <label> Vorname: </label>
      <input type= "text" name="vorname" required pattern=".{2,}"> <br>
      <label> E-Mailadresse:</label> 
      <input type="email" name="email" required> <br>
      <label> Homepage:</label>
      <input type="url" name="kunden_url"> <br>
      <label> Ihr Alter: </label>
      <input type="number" name="alter" min="5" max="100"> <br> <br>
      <label> Ihre Anfrage: </label> <br>
      <textarea name="anfrage" cols="35" rows="4"></textarea> <br>
      <p>Wie ist Ihr Interesse an weiteren Produkten? <br>
        niedrig<input type="range" name="punkte" min="0" max="10"> hoch </p>
      <input type="submit" value="Absenden">
   </fieldset> 
  </form >
</html>