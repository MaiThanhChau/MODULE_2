<?php
$dlist = new SplDoublyLinkedList();
$dlist->push('hiramariam');
$dlist->push('maaz');
$dlist->push('zafar');
$dlist->unshift(1);
$dlist->unshift(2);
$dlist->unshift(3);
$dlist->pop();
$dlist->shift();
$dlist->add(3 , 2.24);
echo '<pre>';
    print_r( $dlist );
echo '</pre>';
for($dlist->rewind();$dlist->valid();$dlist->next()){

    echo $dlist->current()."<br/>";
}
echo "<br/>";
$dlist->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
for($dlist->rewind();$dlist->valid();$dlist->next()){

    echo $dlist->current()."<br/>";;
}