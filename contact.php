<?php include 'includes/header.php'; ?>
<h1>Contact Us</h1>

<form method="get" action="contactAction.php">
    <!--<input type="text" name="name" id="name" placeholder="Enter your name"><br>
    <input type="email" name="email" id="email" placeholder="Enter your email address"><br>
    <input type="text" name="message" id="message" placeholder="Enter your message to us"><br>
    <input type="submit" name="submit">-->
    <label>How many Fruit Rollups would you like to buy?</label>
    <input type="text" name="quantity" id="quantity" placeholder="Enter the number">
    <label>What flavor?</label>
    <input type="text" name="flavor" id="flavor" placeholder="Enter the flavor">
    <input type="submit" name="submit">
</form>
<?php include 'includes/footer.php'; ?>
