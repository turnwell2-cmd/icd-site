<?php
// add_shipment.php - form to add new shipments
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Send a Package</title>
<style>
body { font-family: Arial, sans-serif; background: #f9f9f9; margin: 20px; }
form { background: #fff; padding: 20px; border-radius: 8px; max-width: 700px; margin: auto; box-shadow: 0 2px 5px rgba(0,0,0,0.2); }
h1 { text-align: center; }
label { display: block; margin-top: 10px; font-weight: bold; }
input, select, textarea { width: 100%; padding: 8px; margin-top: 4px; border-radius: 4px; border: 1px solid #ccc; }
button { margin-top: 15px; padding: 10px 15px; border: none; background: #007BFF; color: white; font-size: 16px; border-radius: 4px; cursor: pointer; }
button:hover { background: #0056b3; }
</style>
</head>
<body>

<h1>Send a Package</h1>

<form method="post" action="sp.php">
    <h2>Customer Details</h2>
    <label for="customer_name">Customer Name</label>
    <input type="text" id="customer_name" name="customer_name" required>

    <label for="email">Customer Email</label>
    <input type="email" id="email" name="email" required>

    <h2>Shipment Details</h2>
    <label for="service">Service</label>
    <select id="service" name="service" required>
        <option value="Worldwide Overnight Express">Worldwide Overnight Express</option>
        <option value="Express">Express</option>
        <option value="Standard">Standard</option>
    </select>

    <label for="package_content">Package Content</label>
    <input type="text" id="package_content" name="package_content" required>

    <label for="package_weight">Package Weight</label>
    <input type="text" id="package_weight" name="package_weight" required>

    <label for="declared_value">Declared Value</label>
    <input type="text" id="declared_value" name="declared_value" required>

    <label for="additional_services">Additional Services</label>
    <input type="text" id="additional_services" name="additional_services">

    <label for="third_party_account">Third Party Account Number</label>
    <input type="text" id="third_party_account" name="third_party_account">

    <label for="origin">Origin</label>
    <input type="text" id="origin" name="origin" required>

    <label for="destination">Destination</label>
    <input type="text" id="destination" name="destination" required>

    <label for="notes">Notes</label>
    <textarea id="notes" name="notes" rows="4"></textarea>

    <button type="submit">Send Package</button>
</form>

</body>
</html>
