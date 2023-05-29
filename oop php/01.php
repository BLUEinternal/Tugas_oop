<!DOCTYPE html>
<html>
<body>

<?php
class car {
  // Properties
  public $mobil;
  public $color;

  // Methods
  function set_mobil($mobil) {
    $this->mobil = $mobil;
  }
  function get_mobil() {
    return $this->mobil;
  }

  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$avanza = new car();
$toyota = new car();

$avanza->set_mobil('avanza');
$toyota->set_mobil('toyota');

$hijau = new car();
$hijau->set_color('hijau');

echo $avanza->get_mobil();
echo "<br>";
echo $toyota->get_mobil();
echo "<br>";
echo $hijau->get_color();
?>
 
</body>
</html>
