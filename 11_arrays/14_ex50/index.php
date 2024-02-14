<?php
    $identidades=[
        "Macri"=>19,
        "Mabel"=>19,
        "Bia"=>22
    ];
    
?>
<table border="1">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        <?php foreach($identidades as $info => $dado): ?>
            <tr>
                <td> <?= $info;?> </td>
                <td> <?= $dado;?> </td>
            </tr>
        <?php endforeach; ?>
</table>