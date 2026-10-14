<?php
    function btw($bedrag,$btwpercentage) {
        $btw = round(($bedrag * $btwpercentage) + $bedrag, 2);
        return $btw;
    }
    function bmi($gewicht,$lengte) {
        $bmi = round($gewicht / ($lengte ** 2), 1);
        return $bmi;
    }
    function gemiddelde(array $cijfers) {
        $totaal = 0;
        $count = count($cijfers);
        for ($i = $count - 1; $i >= 0; $i--) {
            $totaal = $totaal + $cijfers[$i];
        }
        $gemiddelde = $totaal / $count;
        return $gemiddelde;
    }
?> 