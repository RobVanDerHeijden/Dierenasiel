<?php $paginaTitel="Dieren zijn voor iedereen!"; ?>
<?php $paginaSlogan="Aanwezige dieren"; ?>

<?php include 'header.php'; ?>

<a href="index.php">Home</a>
<a href="#honden-tabel">Honden</a>
<a href="#katten-tabel">Katten</a>

<div class="content">
    <h3>Honden</h3>
    <p>Hieronder een overzicht van de honden die momenteel uit ons dierenasiel.</p>
    <table id="honden-tabel" class="dieren honden-tabel">
      <thead>
        <tr>
          <th>Naam</th><th>Leeftijd</th><th>Reg. Nr.</th><th>Gereserveerd</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>Blaffer</td><td>4,5</td><td>31415</td><td>Nee</td>
        </tr>
        <tr>
            <td>Kitty</td><td>2</td><td>31416</td><td>Ja</td>
        </tr>
        <tr>
            <td>Scooby</td><td>8</td><td>31417</td><td>Ja</td>
        </tr>
      </tbody>
    </table>
    
    <h3>Katten</h3>
    <p>Hieronder een overzicht van de katten die momenteel uit ons dierenasiel.</p>
    <table id="katten-tabel" class="dieren katten-tabel">
      <thead>
        <tr>
          <th>Naam</th><th>Leeftijd</th><th>Reg. Nr.</th><th>Gereserveerd</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>Blaffer</td><td>4,5</td><td>31415</td><td>Nee</td>
        </tr>
        <tr>
            <td>Kitty</td><td>2</td><td>31416</td><td>Ja</td>
        </tr>
        <tr>
            <td>Scooby</td><td>8</td><td>31417</td><td>Ja</td>
        </tr>
      </tbody>
    </table>
    
    <h3>Dier toevoegen:</h3>
    <form>
        <table id="dieren-toevoegen-form-tabel" class="dieren-toevoegen-form-tabel">
            <tr>
                <td><label for="naam">Naam</label></td>
                <td><input type="text" id="naam" /></td>
            </tr>
            <tr>
                <td><label for="leeftijd">Leeftijd</label></td>
                <td><input type="number" id="leeftijd" /></td>
            </tr>
            <tr>
                <td><label for="regnr">Registratie Nummer</label></td>
                <td><input type="number" id="regnr" /></td>
            </tr>
            <tr>
                <td><input type="radio" name="diersoort" value="hond"> Hond<br></td>
                <td><input type="radio" name="diersoort" value="kat"> Kat</td>
            </tr>
            <tr>
                <td><input type="submit" value="Toevoegen" /></td>
            </tr>

            
        </table>
        
    </form>
    
</div>

<?php include 'footer.php'; ?>
