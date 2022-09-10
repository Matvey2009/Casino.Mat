<?php 
    header('content-type: text/css');
    $bgcolor = 'rgb(60, 130, 60)';
?>

:root{
    --fontColor: rgb(220, 220, 220);
}

body {
    background-color: <?=$bgcolor?>;
    overflow: hidden;
    padding: 0;
    margin: 0;
    color: rgb(146, 207, 228);
    color: var(--fontColor);
}

form {
    margin: 16px;
    color: lime;
    text-align: center;
}

.row {
    padding: 3px;
    display: flex;
    flex-direction: row;
}

.col {
    padding: 4px;
    display: flex;
    flex-direction: column;
}