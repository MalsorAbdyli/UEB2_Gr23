<!DOCTYPE html>
<html>
<head>
    <title>Manage Staff</title>
    
    <style>
        /* Reset default styles */
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
            width: 80%;
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

        /* Style the confirmation popup */
        .confirmation-popup {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .confirmation-popup p {
            margin: 0;
        }

        .confirmation-popup button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Manage Staff</h1>
    <a href="admin_panel.php" style="margin-left:660px">Go back to Admin Panel</a>
    <p>Add, edit, or remove staff members here.</p>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Connect to the database
                $connection = mysqli_connect("localhost", "root", "1242140733ma", "user_db");

                // Check if the connection is successful
                if ($connection) {
                    // Query the user_form table to fetch staff members
                    $query = "SELECT * FROM user_form";
                    $result = mysqli_query($connection, $query);

                    // Loop through the fetched rows and display staff members in the table
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['email']."</td>";

                        // Check the value of 'role' and display the appropriate role name
                        if ($row['isAdmin'] == 0) {
                            echo "<td>Client</td>";
                        } elseif ($row['isAdmin'] == 1) {
                            echo "<td>Admin</td>";
                        } else {
                            echo "<td>N/A</td>";
                        }

                        echo "<td><a href='#' class='edit-btn' data-id='".$row['id']."'>Edit</a> | <a href='#' class='delete-btn' data-id='".$row['id']."'>Delete</a></td>";
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

    <!-- Edit Staff Popup -->
    <div id="edit-popup" class="popup">
        <h2>Edit Staff</h2>
        <form action="update_staff.php" method="POST">
            <input type="hidden" id="edit-id" name="id">
            <label for="edit-name">Name</label>
            <input type="text" id="edit-name" name="name" required>
            <label for="edit-email">Email</label>
            <input type="email" id="edit-email" name="email" required>
            <label for="edit-role">Role</label>
            <select id="edit-role" name="role">
                <option value="0">Client</option>
                <option value="1">Admin</option>
            </select>
            <button type="submit">Save</button>
        </form>
        <button id="close-popup">Close</button>
    </div>

    <!-- Confirmation Popup -->
    <div id="confirmation-popup" class="confirmation-popup">
        <p>Are you sure you want to delete this staff member?</p>
        <button id="confirm-delete">Yes</button>
        <button id="cancel-delete">No</button>
    </div>

    <!-- Add your JavaScript scripts or link to external scripts -->
    <script src="admin_scripts.js"></script>
    <script>
        // JavaScript code to handle the edit popup and delete confirmation popup
        const editButtons = document.querySelectorAll('.edit-btn');
        const deleteButtons = document.querySelectorAll('.delete-btn');
        const editPopup = document.getElementById('edit-popup');
        const closePopupButton = document.getElementById('close-popup');
        const editIdInput = document.getElementById('edit-id');
        const editNameInput = document.getElementById('edit-name');
        const editEmailInput = document.getElementById('edit-email');
        const editRoleInput = document.getElementById('edit-role');
        const confirmationPopup = document.getElementById('confirmation-popup');
        const confirmDeleteButton = document.getElementById('confirm-delete');
        const cancelDeleteButton = document.getElementById('cancel-delete');

        // Open the edit popup and populate the form fields with data
        function openEditPopup(id, name, email, role) {
            editIdInput.value = id;
            editNameInput.value = name;
            editEmailInput.value = email;
            editRoleInput.value = role;
            editPopup.style.display = 'block';
        }

        // Close the edit popup
        function closeEditPopup() {
            editPopup.style.display = 'none';
        }

        // Show the confirmation popup
        function showConfirmationPopup() {
            confirmationPopup.style.display = 'block';
        }

        // Hide the confirmation popup
        function hideConfirmationPopup() {
            confirmationPopup.style.display = 'none';
        }

        // Attach click event listeners to the edit buttons
        editButtons.forEach((button) => {
            button.addEventListener('click', function() {
                const id = button.getAttribute('data-id');
                const name = button.parentNode.parentNode.querySelector('td:nth-child(1)').innerText;
                const email = button.parentNode.parentNode.querySelector('td:nth-child(2)').innerText;
                const role = button.parentNode.parentNode.querySelector('td:nth-child(3)').innerText === 'Admin' ? '0' : '1';
                openEditPopup(id, name, email, role);
            });
        });

       // Show the confirmation popup and handle delete action
function showConfirmationPopup(id) {
    confirmationPopup.style.display = 'block';

    // Confirm delete
    confirmDeleteButton.addEventListener('click', function() {
        // Perform the deletion using AJAX
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'delete_staff.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    // Deletion successful
                    location.reload();
                } else {
                    // Error occurred
                    console.log('Error deleting record: ' + xhr.status);
                }
            }
        };
        xhr.send('id=' + id);

        hideConfirmationPopup();
    });

    // Cancel delete
    cancelDeleteButton.addEventListener('click', hideConfirmationPopup);
}

// Attach click event listeners to the delete buttons
deleteButtons.forEach((button) => {
    button.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent default link behavior
        const id = button.getAttribute('data-id');
        showConfirmationPopup(id);
    });
});


    </script>
</body>
</html>
