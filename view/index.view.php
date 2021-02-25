<?php
    use OOP\Boss;
    use OOP\Programmer;
    use OOP\Tester;
    use OOP\Render;
?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imone</title>
</head>
<body>
    <?php
    $user0 = new Boss('Dmitri', 'Dmitri@dump.co.ru', '45');
    $user0->addLocation('Russia');

    $user1 = new Programmer ('LEX9', 'LEX9@dump.co.uk');
    $user1->addLocation('English');
    $user1->setSalary(1500);

    $user2 = new Tester('Brembo', 'brembo@brembo.uk');
    $user2->addLocation('England');
    $user2->setSalary(750);
    $user2->addTask('Clean up code');
    $user2->addTask('Fix up code');

    Render::PrintInfo($user0->getInfo());
    echo '<br>';
    Render::PrintInfo($user1->getInfo());
    echo '<br>';
    Render::PrintInfo($user2->getInfo());
    ?>
</body>
</html>