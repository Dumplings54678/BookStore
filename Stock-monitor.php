<?php
include 'config.php';

$page_title = "Stock Control";

$bookstore_products = [
    "The Cat in the Hat" => ["price" => 350.50, "stock" => 15],
    "Harry Potter and the Sorcerer's Stone" => ["price" => 520.75, "stock" => 8],
    "The Very Hungry Caterpillar" => ["price" => 280.00, "stock" => 22],
    "Charlotte's Web"  => ["price" => 310.25, "stock" => 12],
    "Where the Wild Things Are"  => ["price" => 295.50, "stock" => 6],
    "The Giving Tree" => ["price" => 275.00, "stock" => 18],
    "Green Eggs and Ham" => ["price" => 265.75, "stock" => 25],
    "To Kill a Mockingbird"  => ["price" => 420.00, "stock" => 9],
    "1984"  => ["price" => 380.50, "stock" => 14],
    "Pride and Prejudice"    => ["price" => 325.25, "stock" => 7]
];
$tax_rate = 12;

function get_reorder_message(int $stock_level): string {
    return $stock_level < 10 ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax_rate = 0): float {
    $total_value = $price * $quantity;
    return $total_value * ($tax_rate / 100);
}
?>

<?php include 'header.php'; ?>
<div class="page-header">
<h1><?php echo $store_name; ?></h1>
<p class="subtitle">Stock Control System</p>
</div>

<div class="content-section">
<h2 class="section-title">Product Inventory</h2>
    
    <table class="data-table">
        <thead>
            <tr>
            <th>PRODUCT</th>
            <th>STOCK</th>
            <th>RE-ORDER</th>
            <th>TOTAL VALUE (₱)</th>
            <th>TAX DUE (₱)</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $total_stock_value = 0;
            $total_tax_due = 0;
            
            foreach ($bookstore_products as $product_name => $data): 
                $price = $data["price"];
                $stock = $data["stock"];
                $reorder = $stock < 10 ? "Yes" : "No";
                $reorder_class = $stock < 10 ? "reorder-yes" : "reorder-no";
                $total_value = $price * $stock;
                $tax_due = $total_value * ($tax_rate / 100);
                $total_stock_value += $total_value;
                $total_tax_due += $tax_due;
            ?>
            <tr>
             <td><?php echo htmlspecialchars($product_name); ?></td>
            <td><?php echo $stock; ?></td>
            <td class="<?php echo $reorder_class; ?>"><?php echo $reorder; ?></td>
            <td class="currency">₱<?php echo number_format($total_value, 2); ?></td>
            <td class="currency">₱<?php echo number_format($tax_due, 2); ?></td>
            </tr>
            <?php endforeach; ?>
            
            <tr style="background-color: #e8f4f8; font-weight: bold;">
            <td colspan="3">TOTALS</td>
            <td class="currency">₱<?php echo number_format($total_stock_value, 2); ?></td>
            <td class="currency">₱<?php echo number_format($total_tax_due, 2); ?></td>
            </tr>
        </tbody>
    </table>
    
    <div class="promotion-box" style="margin-top: 30px;">
        <h3>Stock Control Summary</h3>
        <p><strong>Note:</strong> Re-order is triggered when stock falls below 10 units.</p>
        <p><strong>Tax Rate:</strong> <?php echo $tax_rate; ?>% VAT</p>
        <p><strong>Date:</strong> <?php echo date('F j, Y'); ?></p>
        <p><strong>Total Products:</strong> <?php echo count($bookstore_products); ?> items</p>
        <p><strong>Total Inventory Value:</strong> ₱<?php echo number_format($total_stock_value, 2); ?></p>
        <p><strong>Total Tax Liability:</strong> ₱<?php echo number_format($total_tax_due, 2); ?></p>
    </div>
</div>

<?php include 'footer.php'; ?>