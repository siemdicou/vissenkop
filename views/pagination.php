<?php
// hier wordt de pagination gemaakt.

echo "<div id='pagination-whole'>";
echo "<a href='?page=producten&page_nr=1'>".'|<'."</a> ";
//Ga naar de pagina's
for ($i=1; $i<=$total_pages; $i++) {
    echo "<div id='pagination-cijfers'>";
    echo "<a href='?page=producten&page_nr=".$i."'>".$i."</a> ";
    echo "</div>";
};
//Ga naar de laatste pagina
echo "<a href='?page=producten&page_nr=$total_pages'>".'>|'."</a> ";
echo "</div>";
?>