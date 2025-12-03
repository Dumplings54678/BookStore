<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' : ''; ?><?php echo $store_name; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="main-navigation">
        <div class="nav-container">
            <ul class="nav-menu">
                <?php foreach($nav_links as $title => $link): ?>
                    <li>
                        <a href="<?php echo $link; ?>" 
                           <?php if(basename($_SERVER['PHP_SELF']) == $link): ?>class="active"<?php endif; ?>>
                            <?php echo $title; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
    
    <div class="container">
        <div class="current-page">
            <?php
            $current_page = basename($_SERVER['PHP_SELF']);
            switch($current_page) {
                case 'index.php':
                    echo "Welcome to The Reading Nook - Your local independent bookstore";
                    break;
                case 'stock-monitor.php':
                    echo "Stock Control System - Manager View";
                    break;
                default:
                    echo "The Reading Nook Bookstore";
            }
            ?>
        </div>
