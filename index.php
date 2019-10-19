<?php

use App\Classes\Person;

require_once __DIR__ . '/vendor/autoload.php';

$person = new Person;
$person->setName('Scarlett Johansson');
$person->setDob('1984-11-22');


?>

<details open style="display: inline-block">
    <summary>Object</summary>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>DOB</th>
            <th>Age</th>
        </tr>
        <tr>
            <td><?php echo $person->getName(); ?></td>
            <td><?php echo $person->getDob(); ?></td>
            <td><?php echo $person->age(); ?></td>
        </tr>
    </table>
</details>

<style>
    details {
        display: inline-block;
    }
</style>