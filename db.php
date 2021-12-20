<?php

$link = mysqli_connect('localhost', 'root', 123, 'example');

$result = mysqli_query($link, 'SELECT * FROM product WHERE id < 100 LIMIT 1');

while($data = mysqli_fetch_assoc($result)) {

    /*echo '<p>Товар: '.$row['name'].'. Стоимость: '.$row['price'].' руб. Остаток на складе: '.$row['quantity'].' шт. </p>';*/
    echo json_encode($data);
}

mysqli_close($link);
