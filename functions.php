<?php
    function btw($bedrag,$btwpercentage) {
        $btw = round(($bedrag * $btwpercentage) + $bedrag, 2);
        return $btw;
    }
?> 