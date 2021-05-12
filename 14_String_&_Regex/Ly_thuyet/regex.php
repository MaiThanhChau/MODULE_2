<?php
$string = 'Hello World Hihi Hehe';
$pattern = '/[A-Z]/';
$timthay = preg_match($pattern, $string, $matches);
echo $timthay;
$timthay = preg_match_all($pattern, $string, $matches);
echo '<br>'.$timthay;
$timthay  = preg_split($pattern,$string);
echo '<pre>';
    print_r( $timthay );
echo '</pre>';
$timthay = preg_replace($pattern, 'chau', $string);
echo '<pre>';
    print_r( $timthay );
echo '</pre>';



