<?php
session_start(); // Start the session if not already started

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once '../../../function/DB.php'; // Adjust the path to DB.php according to your directory structure
    $db = new DB();

    // Generate a 6-digit ID
    $id = mt_rand(100000, 999999);
    
    $service_type = $_POST['service_type'];
    $note = $_POST['note'];
    
    // Retrieve the user's name from the session
    $requester_name = isset($_SESSION['id']['full_name']) ? $_SESSION['id']['full_name'] : 'Unknown User';

    // Call the It_Request method to insert data into the database
    $add = $db->It_Request($id, $service_type, $note, $requester_name);

    // Check if the data insertion was successful
    if ($add) {
        header('Location: ../../index.php?add_request=success');
        exit();
    } else {
        header('Location: ../../index.php?add_request=error');
        exit();
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        /* Add your custom styles here */
        body {
            background-color: #f8f9fa;
        }
        label{
            color: white;
        }
        .form-container {
            position: relative;
            top: 150px;
            max-width: 700px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #212529;
        }
        .form-container .form-group label {
            font-weight: bold;
        }
        .company-logo {
            display: block;
            margin: 0 auto 20px auto;
            max-width: 150px;
        }
        textarea {
            max-height: 300px; /* Set the maximum height for the textarea */
            min-height: 150px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
        .btn {
            padding: 10px 20px;
            font-size: 24px;
            border-radius: 10px; /* Rounded corners */
            margin-left: 5px;
        }

    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <img src="../../assets/img/club-logo.png" alt="Company Logo" class="company-logo">
        <form action="it_form.php" method="post">
            <div class="form-group">
                <label for="service_type">Service Type</label>
                <select id="service_type" name="service_type" class="form-control" required>
                    <option value="" selected disabled>-- اختر نوع الخدمة--</option>
                    <option value="software">صيانة</option>
                    <option value="hardware">عطل تقني</option>
                    <option value="استشارة">استشارة</option>
                    <option value="اخرى">اخرى</option>
                </select>
            </div>
            <div class="form-group">
                <label for="note">ملاحظات</label>
                <textarea id="note" name="note" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">إرسال</button>
                <a href="javascript:history.back()" class="btn btn-secondary">عودة</a>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j6fvLLsZ5G5fnJ8p3sn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
