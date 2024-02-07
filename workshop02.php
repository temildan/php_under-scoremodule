<?php
$mainMenu = [
    ["name" => "Home", "link" => "index.php"],
    ["name" => "Contact", "link" => "contact.php"],
    ["name" => "Services", "link" => "services.php"],
];

$footerMenu = [
    ["name" => "Legal", "link" => "legal.php"],
    ["name" => "Support", "link" => "support.php"],
];


function generateMenu(array $menu, string $navClass, string $title=null)
{ ?>
    <nav class="<?=$navClass?>">
        <?php if ($title) { ?>
            <h2><?=$title?></h2>
        <?php } ?>
        <ul>
            <?php foreach ($menu as $item) { ?>
                <li><a href="<?= $item["link"] ?>"><?= $item["name"] ?></a></li>
            <?php } ?>
        </ul>
    </nav>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mainMenu {
            background-color: red;
        }
        .footerMenu {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <header>
        <?php generateMenu($mainMenu, "mainMenu") ?>
    </header>
    <main>
        <h1>My super page</h1>
        <p>Test content</p>
    </main>
    <footer>
        <?php generateMenu($mainMenu, "footerMenu") ?>
        <?php generateMenu($footerMenu, "footerMenu", "Legal stuff") ?>
        
    </footer>
</body>

</html>