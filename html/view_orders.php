<!DOCTYPE html>
<html>
<head>
    <title>View Orders</title>
    <style>
     html, body {
            margin: 0;
            padding: 0;
        }

        /* Set background color and font styles */
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Center align the content */
        h1, p {
            text-align: center;
        }

        /* Style the heading */
        h1 {
            font-size: 32px;
            margin-top: 50px;
        }

        /* Style the paragraph */
        p {
            font-size: 18px;
            margin-top: 20px;
        }

        /* Style the table */
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%; /* Set table width to 80% */
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Style the edit popup */
        .popup {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f5f5f5;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .popup h2 {
            text-align: center;
        }

        .popup input {
            display: block;
            margin: 10px 0;
            padding: 5px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .popup button {
            display: block;
            margin: 10px auto;
            padding: 5px 10px;
            border: none;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Add your HTML content for viewing orders -->
    <h1>View Orders</h1>
    <a href="admin_panel.php" style="margin-left:660px">Go back to Admin Panel</a>
    <p>View and manage customer orders here.</p>

    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Card Number</th>
                <th>Expiry Date</th>
                <th>CVC</th>
                <th>Shipping Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Connect to the database
                $connection = mysqli_connect("localhost", "root", "1242140733ma", "user_db");

                // Check if the connection is successful
                if ($connection) {
                    // Query the payments table to fetch orders
                    $query = "SELECT * FROM payments";
                    $result = mysqli_query($connection, $query);

                    // Loop through the fetched rows and display orders in the table
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row['id_payment']."</td>";
                        echo "<td>".$row['emri']."</td>";
                        echo "<td>".hash('sha256', $row['karta'])."</td>";
                        echo "<td>".$row['data']."</td>";
                        echo "<td>".hash('sha256', $row['kodi'])."</td>";
                        echo "<td>".$row['adresa']."</td>";
                        echo "<td>
                                <a href='#' class='edit-btn' data-id='".$row['id_payment']."'>Edit</a> |
                                <a href='delete_order.php?id=".$row['id_payment']."' onclick='return confirm(\"Are you sure you want to delete this order?\");'>Delete</a>
                            </td>";
                        echo "</tr>";
                    }

                    // Close the database connection
                    mysqli_close($connection);
                } else {
                    echo "Database connection failed.";
                }
            ?>
        </tbody>
    </table>

    <!-- Edit Order Popup -->
    <div id="edit-popup" class="popup">
        <h2>Edit Order</h2>
        <form action="update_order.php" method="POST">
            <input type="hidden" id="edit-id" name="id">
            <label for="edit-customer-name">Customer Name</label>
            <input type="text" id="edit-customer-name" name="customer_name" required>
            <label for="edit-shipping-address">Shipping Address</label>
            <input type="text" id="edit-shipping-address" name="shipping_address" required>
            <button type="submit">Save</button>
        </form>
        <button id="close-popup">Close</button>
    </div>

    <!-- Add your JavaScript scripts or link to external scripts -->
    <script src="admin_scripts.js"></script>
    <script>
        // JavaScript code to handle the edit popup
        const editButtons = document.querySelectorAll('.edit-btn');
        const editPopup = document.getElementById('edit-popup');
        const closePopupButton = document.getElementById('close-popup');
        const editIdInput = document.getElementById('edit-id');
        const editCustomerNameInput = document.getElementById('edit-customer-name');
        const editShippingAddressInput = document.getElementById('edit-shipping-address');

        // Open the edit popup and populate the form fields with data
        function openEditPopup(id, customerName, shippingAddress) {
            editIdInput.value = id;
            editCustomerNameInput.value = customerName;
            editShippingAddressInput.value = shippingAddress;
            editPopup.style.display = 'block';
        }

        // Close the edit popup
        function closeEditPopup() {
            editPopup.style.display = 'none';
        }

        // Attach click event listeners to the edit buttons
        editButtons.forEach((button) => {
            button.addEventListener('click', function() {
                const id = button.getAttribute('data-id');
                const customerName = button.parentNode.parentNode.querySelector('td:nth-child(2)').innerText;
                const shippingAddress = button.parentNode.parentNode.querySelector('td:nth-child(6)').innerText;
                openEditPopup(id, customerName, shippingAddress);
            });
        });

        // Attach click event listener to the close button
        closePopupButton.addEventListener('click', closeEditPopup);
    </script>
</body>
</html>
