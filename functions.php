<?php
function calculateTotalValue($books, $prices) {
    $total = 0;
    for ($i = 0; $i < count($books); $i++) {
        $total += $prices[$i];
    }
    return number_format($total, 2);
}

function checkStockStatus($price) {
    if ($price < 10) {
        return "Ready to read";
    } elseif ($price < 15) {
        "Popular choice";
    } else {
        return "Available now";
    }
}

function getDailyOffer($offer_number) {
    $offers = array(
        "Free shipping when you spend $25 or more",
        "Join our book club and save 15% on all purchases",
        "We offer a book trade-in program - bring your gently used books"
    );
    
    if ($offer_number <= count($offers)) {
        return $offers[$offer_number - 1];
    } else {
        return "We always have something special going on - ask us!";
    }
}
?>