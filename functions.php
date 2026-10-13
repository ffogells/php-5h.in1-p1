<?php
    function btw($bedrag,$btwpercentage) {
        $btw = round(($bedrag * $btwpercentage) + $bedrag, 2);
        return $btw;
    }
    function bmi($gewicht,$lengte) {
        $bmi = round($gewicht / ($lengte ** 2), 1);
        return $bmi;
    }
?> 