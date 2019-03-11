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
</div>

<?php include 'footer.php'; ?>
