<?php
// Estructura asociativa: producto => precio
$productos = [
  "Pan de Camas"        => 1.20,
  "Aceitunas aliñadas"  => 2.50,
  "Tortas de aceite"    => 3.00
];
?>

<h2 class="text-success text-center mt-4">Productos locales de Camas</h2>

<table class="table table-bordered table-striped w-75 mx-auto mt-4 text-center align-middle">
  <thead class="table-primary">
    <tr>
      <th>Producto</th>
      <th>Precio (€)</th>
    </tr>
  </thead>
  <tbody>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Producto</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $productos = ["Pan de Camas", "Aceitunas aliñadas", "Tortas de aceite", "Vino de la tierra"];
    $i = 0;
    while ($i < count($productos)) {
        echo "<tr><td>" . htmlspecialchars($productos[$i]) . "</td></tr>";
        $i++;
    }
    ?>
  </tbody>
</table>
  </tbody>
</table>
