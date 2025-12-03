<?php
include 'config.php';

$page_title = "Home";

$books = array(
    "The Cat in the Hat",
    "Harry Potter and the Sorcerer's Stone", 
    "The Very Hungry Caterpillar",
    "Charlotte's Web",
    "Where the Wild Things Are",
    "The Giving Tree",
    "Green Eggs and Ham"
);
$prices = array(350.50, 520.75, 280.00, 310.25, 295.50, 275.00, 265.75);
$authors = array(
    "Dr. Seuss",
    "J.K. Rowling", 
    "Eric Carle",
    "E.B. White",
    "Maurice Sendak",
    "Shel Silverstein",
    "Dr. Seuss"
);
$year_opened = 2018;
$current_year = date("Y");
$years_open = $current_year - $year_opened;
$hour = date("H");

if ($hour < 12) {
    $greeting = "Good morning";
} elseif ($hour < 17) {
    $greeting = "Good afternoon";
} else {
    $greeting = "Good evening";
}

$total = 0;
for ($i = 0; $i < count($books); $i++) {
    $total += $prices[$i];
}
$total_value = number_format($total, 2);
$customer_name = "book lover";
$offer_count = 1;
?>

<?php include 'header.php'; ?>

<div class="page-header">
<h1>Welcome to <?php echo $store_name; ?></h1>
<p class="subtitle"><?php echo $greeting; ?>, <?php echo $customer_name; ?>! We're glad you stopped by.</p>
</div>

<div class="content-section">
    <h2 class="section-title">About Our Little Bookstore</h2>
    <p>For <?php echo $years_open; ?> years, we've been helping readers like you find their next favorite book.</p>
    
    <div class="info-grid">
        <div class="info-card">
        <span class="info-number"><?php echo count($books); ?></span>
        <span class="info-label">Carefully Selected Titles</span>
        </div>
        <div class="info-card">
        <span class="info-number">₱<?php echo $total_value; ?></span>
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

<div class="content-section">
    <h2 class="section-title">This Week's Special Treat</h2>
    <div class="promotion-box">
        <h3> <?php echo $special_offer; ?> </h3>
        <p>Perfect timing to pick up that book you've been thinking about!</p>
    </div>
</div>

<div class="content-section">
    <h2 class="section-title">Our Current Selection</h2>
    <p>Here are the wonderful books we have waiting for you today:</p>
    
    <table class="data-table">
        <thead>
            <tr>
            <th>Book Title</th>
            <th>Author</th>
            <th>Price (₱)</th>
            <th>Availability</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($books); $i++): ?>
            <tr>
            <td class="book-title"><?php echo $books[$i]; ?></td>
            <td class="author-name">by <?php echo $authors[$i]; ?></td>
            <td class="price">₱<?php echo number_format($prices[$i], 2); ?></td>
            <td>
                <span class="availability">
                    <?php 
                        
                    if ($prices[$i] < 300) {
                        echo "Ready to read";
                    } elseif ($prices[$i] < 400) {
                        echo "Popular choice";
                    } else {
                        echo "Available now";
                    }
                    ?>
                </span>
            </td>
            </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>

<div class="content-section">
    <h2 class="section-title">Today's Special Deal</h2>
    
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
    ?>
    
    <div class="friendly-note">
        <p><strong><?php echo $deal; ?></strong></p>
        <p><small>Happy <?php echo $day; ?>! We hope you find something wonderful to read.</small></p>
    </div>
</div>

<div class="content-section">
    <h2 class="section-title">Browse All Our Titles</h2>
    <p>Take your time exploring our collection:</p>
    
    <?php
    $book_number = 1;
    foreach ($books as $book) {
        echo '<div class="book-item">';
        echo '<div class="book-title">' . $book . '</div>';
        echo '<div class="author-name">by ' . $authors[$book_number-1] . ' • ₱' . number_format($prices[$book_number-1], 2) . '</div>';
        echo '</div>';
        $book_number++;
    }
    ?>
    
    <div class="friendly-note" style="margin-top: 20px;">
        <p>Don't see what you're looking for? We're always happy to order books for you - just ask!</p>
    </div>
</div>

<?php include 'footer.php'; ?>
