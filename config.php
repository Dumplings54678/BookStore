        
<div class="site-footer">
            
    <div class="quick-links">
        <h3>Quick Navigation</h3>
        <?php foreach($nav_links as $title => $link): ?>
            <a href="<?php echo $link; ?>" class="quick-link">
                <?php echo $title; ?>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="contact-details">
        <h3>Come Visit Us</h3>
        <p> We'd love to see you in person and help you find your next great read! </p>
        <p><strong> Our location: </strong> <?php echo $store_address; ?></p>
        <p><strong> Give us a call: </strong> <?php echo $store_phone; ?></p>
        <p><strong> Send us an email: </strong> <a href="mailto:<?php echo $store_email; ?>"><?php echo $store_email; ?></a></p>
        <p><strong> When we're open: </strong> <?php echo $store_hours; ?></p>
    </div>
            
            
    <div class="copyright">
        <p>&copy; <?php echo date('Y'); ?> <?php echo $store_name; ?></p>
    </div>
</div>
</div> 
</body>
</html>
