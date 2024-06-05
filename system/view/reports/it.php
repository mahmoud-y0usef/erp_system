<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
        .open-btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: box-shadow 0.3s ease;
        }
        .open-btn:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .page-link {
            padding: 6px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin: 0 4px;
            text-decoration: none;
            color: #333;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .page-link:hover {
            background-color: #f2f2f2;
        }
        .current-page {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Request Services</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Request</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        <?php
        // Include your database connection file
        require_once '../../../function/DB.php'; 

        // Create a new instance of the DB class
        $db = new DB();

        // Fetch all requests from the database
        $requests = $db->GetAllRequests();

        // Check if requests exist
        if ($requests) {
            // Iterate through each request and display its details in a table row
            foreach ($requests as $request) {
                echo "<tr>";
                echo "<td>" . $request['id'] . "</td>";
                echo "<td>" . $request['service'] . "</td>";
                echo "<td>" . $request['note'] . "</td>";
                echo "<td>" . $request['requester'] . "</td>";
                echo "<td><a class='open-btn' href='#'>Open</a></td>";
                echo "</tr>";
            }
        } else {
            // If no requests found, display a message
            echo "<tr><td colspan='5'>No requests found.</td></tr>";
        }
        ?>

    </table>

    <!-- Pagination links -->
    <div class="pagination">
        <a class="page-link" href="../../index.php">Back</a> <!-- Link to the home page -->
        <?php
        // Your PHP code for pagination will go here
        ?>
    </div>
</div>

</body>
</html>
