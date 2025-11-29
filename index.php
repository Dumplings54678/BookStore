<?php
include 'config.php';
include 'functions.php';

$store_name = "The Reading Nook";
$owner = "Sarah Johnson";
$year_opened = 2018;
$current_year = date("Y");
$years_open = $current_year - $year_opened;

$books = array(
    "The Cat in the Hat",
    "Harry Potter and the Sorcerer's Stone", 
    "The Very Hungry Caterpillar",
    "Charlotte's Web",
    "Where the Wild Things Are",
    "The Giving Tree",
    "Green Eggs and Ham"
);

$prices = array(8.99, 12.50, 7.25, 9.75, 8.50, 10.25, 7.99);

$authors = array(
    "Dr. Seuss",
    "J.K. Rowling", 
    "Eric Carle",
    "E.B. White",
    "Maurice Sendak",
    "Shel Silverstein",
    "Dr. Seuss"
);

$hour = date("H");
if ($hour < 12) {
    $greeting = "Good morning";
} elseif ($hour < 17) {
    $greeting = "Good afternoon";
} else {
    $greeting = "Good evening";
}

$total_value = calculateTotalValue($books, $prices);
$customer_name = "book lover";
?>

<!DOCTYPE html>
<html>
<head>
    <title>The Reading Nook - Your Local Bookstore</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fefefe;
            color: #333;
            line-height: 1.6;
        }
        
        .welcome-section {
            text-align: center;
            padding: 40px 20px;
            border-bottom: 1px solid #e8e8e8;
            margin-bottom: 30px;
        }
        
        .welcome-section h1 {
            font-size: 2.8em;
            font-weight: normal;
            margin: 0 0 15px 0;
            color: #2c1810;
        }
        
        .welcome-message {
            font-size: 1.2em;
            color: #666;
            margin: 10px 0;
        }
        
        .section {
            background: white;
            padding: 30px;
            margin: 25px 0;
            border-radius: 4px;
            border: 1px solid #e8e8e8;
        }
        
        h2 {
            font-weight: normal;
            color: #2c1810;
            margin-top: 0;
            font-size: 1.6em;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        
        th {
            text-align: left;
            padding: 15px;
            border-bottom: 2px solid #e8e8e8;
            font-weight: normal;
            color: #666;
        }
        
        td {
            padding: 15px;
            border-bottom: 1px solid #e8e8e8;
        }
        
        tr:hover {
            background-color: #f9f9f9;
        }
        
        .store-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        
        .info-card {
            text-align: center;
            padding: 25px 15px;
            border: 1px solid #e8e8e8;
            border-radius: 4px;
        }
        
        .info-number {
            font-size: 1.8em;
            font-weight: normal;
            color: #2c1810;
            display: block;
        }
        
        .info-label {
            color: #666;
            font-size: 0.95em;
        }
        
        .book-item {
            padding: 18px 0;
            border-bottom: 1px solid #e8e8e8;
        }
        
        .book-item:last-child {
            border-bottom: none;
        }
        
        .price {
            color: #2c1810;
            font-weight: normal;
        }
        
        .availability {
            font-size: 0.85em;
            padding: 4px 10px;
            background: #f5f5f5;
            border-radius: 3px;
        }
        
        .promotion {
            background: #f8f8f8;
            padding: 20px;
            border-radius: 4px;
            margin: 15px 0;
            border-left: 3px solid #8b7355;
        }
        
        .friendly-note {
            background: #f0f7ff;
            padding: 20px;
            border-radius: 4px;
            margin: 15px 0;
            border-left: 3px solid #6b8cae;
        }
        
        .author-name {
            color: #666;
            font-style: italic;
        }
        
        .contact-details {
            background: #f8f8f8;
            padding: 25px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <div class="welcome-section">
        <h1>Welcome to The Reading Nook</h1>
        <p class="welcome-message"><?php echo $greeting; ?>, <?php echo $customer_name; ?>! We're so glad you stopped by.</p>
        <p class="welcome-message">For <?php echo $years_open; ?> years, we've been helping readers like you find their next favorite book.</p>
    </div>

    <div class="section">
        <h2>About Our Little Bookstore</h2>
        <div class="store-info">
            <div class="info-card">
                <span class="info-number"><?php echo count($books); ?></span>
                <span class="info-label">Carefully Selected Titles</span>
            </div>
            <div class="info-card">
                <span class="info-number">$<?php echo $total_value; ?></span>
                <span class="info-label">Worth of Stories Waiting</span>
            </div>
            <div class="info-card">
                <span class="info-number"><?php echo $years_open; ?></span>
                <span class="info-label">Years of Happy Readers</span>
            </div>
            <div class="info-card">
                <span class="info-number">Sarah</span>
                <span class="info-label">Your Friendly Bookseller</span>
            </div>
        </div>
    </div>

    <div class="section">
        <h2>This Week's Special Treat</h2>
        <div class="promotion">
            <h3>✨ <?php echo $special_offer; ?> ✨</h3>
            <p>Perfect timing to pick up that book you've been thinking about!</p>
        </div>
    </div>

    <div class="section">
        <h2>Our Current Selection</h2>
        <p>Here are the wonderful books we have waiting for you today:</p>
        
        <table>
            <thead>
                <tr>
                    <th>Book Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Availability</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($books); $i++): ?>
                <tr>
                    <td><?php echo $books[$i]; ?></td>
                    <td class="author-name">by <?php echo $authors[$i]; ?></td>
                    <td class="price">$<?php echo $prices[$i]; ?></td>
                    <td><span class="availability"><?php echo checkStockStatus($prices[$i]); ?></span></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>

    <div class="section">
        <h2>Little Extras for You</h2>
        
        <?php
        $offer_count = 1;
        while ($offer_count <= 3) {
            echo '<div class="promotion">';
            echo '<p>' . getDailyOffer($offer_count) . '</p>';
            echo '</div>';
            $offer_count++;
        }
        ?>
    </div>

    <div class="section">
        <h2>Today's Special Deal</h2>
        
        <?php
        $day = date("l");
        
        switch ($day) {
            case "Monday":
                $deal = "Start your week right - buy 2 paperbacks, get 1 free!";
                break;
            case "Friday":
                $deal = "Weekend reading sorted - free handmade bookmark with every purchase";
                break;
            case "Sunday":
                $deal = "Family day - 20% off all children's books for cozy reading time";
                break;
            default:
                $deal = "Students always get 10% off - just show your ID";
        }
        
        echo '<div class="friendly-note">';
        echo '<p>' . $deal . '</p>';
        echo '<p><small>Happy ' . $day . '! We hope you find something wonderful to read.</small></p>';
        echo '</div>';
        ?>
    </div>

    <div class="section">
        <h2>Browse All Our Titles</h2>
        <p>Take your time exploring our collection:</p>
        
        <?php
        $book_number = 1;
        foreach ($books as $book) {
            echo '<div class="book-item">';
            echo '<strong>' . $book . '</strong>';
            echo '<br><span class="author-name">by ' . $authors[$book_number-1] . ' • $' . $prices[$book_number-1] . '</span>';
            echo '</div>';
            $book_number++;
        }
        ?>
        
        <div class="friendly-note" style="margin-top: 20px;">
            <p>Don't see what you're looking for? We're always happy to order books for you - just ask!</p>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>