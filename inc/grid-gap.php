<?php

if( $grid == 2 ) {
    $grid_class = ' g-d-2 ';
} elseif ( $grid == 3) {
    $grid_class = ' g-d-3 ';
} elseif ( $grid == 4) {
    $grid_class = ' g-d-4 ';
}else {
    $grid_class = ' g-d-1 ';
}

if( $gap == 1 ) {
    $gap_class = 'gap-1 ';
} elseif( $gap == 2 ) {
    $gap_class = 'gap-2 ';
} elseif ( $gap == 3) {
    $gap_class = 'gap-3 ';
} elseif ( $gap == 4) {
    $gap_class = 'gap-4 ';
}else {
    $gap_class = 'no-gap ';
}