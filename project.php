<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Options Form</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-...">

    <style>
        .container {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        
        h1 {
            color: #333;
        }

               .form-check-input:checked + .form-check-label::before {
            background-color: #007bff;
            border-color: #007bff;
        }


        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

      
        label {
            color: #333;
            font-weight: bold;
        }

        
        input[type="text"],
        input[type="tel"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        
        body {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Car Options</h1>
        <form id="carOptionsForm" action="connection.php" method="post">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="carOptions[]" value="Hatchback" id="hatchback">
                <label class="form-check-label" for="hatchback">Hatchback</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="carOptions[]" value="Sedan" id="sedan">
                <label class="form-check-label" for="sedan">Sedan</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="carOptions[]" value="SUV" id="suv">
                <label class="form-check-label" for="suv">SUV</label>
            </div>

            <h2 class="mt-4">Customer Information</h2>
            <div class="mb-3">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="mb-3">
                <label for="phone">Phone Number:</label>
                <input type="tel" name="phone" id="phone" required>
            </div>
            <div class="mb-3">
                <label for="email">Email ID:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="mb-3">
                <label for="address">Address:</label>
                <textarea name="address" id="address" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-..."></script>
</body>
</html>
