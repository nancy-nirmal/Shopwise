<!DOCTYPE html>
<html>

<head>
    <title>PayWise</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/payment.css">
    <script src="https://use.fontawesome.com/releases/v5.7.2/css/all.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css"></script>
    <script>
        function validateCardNumber() {
            // Get the card number input field
            var cardNumberInput = document.getElementById('cardNumber');
            // Get the entered card number
            var cardNumber = cardNumberInput.value;
            // Define a regular expression for valid card number pattern
            var cardNumberPattern = /^[0-9]{4}\s?[0-9]{4}\s?[0-9]{4}\s?[0-9]{4}$/;
            // Test the entered card number against the regular expression
            var isValid = cardNumberPattern.test(cardNumber);
            // Update the input field's validity and custom validation message
            cardNumberInput.setCustomValidity(isValid ? '' : 'Please enter a valid card number');
        }
        document.getElementById('paymentForm').addEventListener('submit', function(event) {
            // Prevent form submission
            event.preventDefault();

            // Perform form validation
            var nameInput = document.getElementById('name');
            var cardNumberInput = document.getElementById('cardNumber');
            var expiryInput = document.getElementById('expiry');
        });
    </script>
</head>

<body>
    <div class="container p-0">
        <div class="card px-4">
            <form id="paymentForm" action="success.php" method="POST">
                <p class="h8 py-3">Payment Details</p>
                <!-- start person name -->
                <div class="row gx-3">
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Person Name</p>
                            <input class="form-control mb-3" type="text" placeholder="Name" required>
                        </div>
                    </div><!-- end person name -->
                    <!-- start cardno name -->
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Card Number</p>
                            <input class="form-control mb-3" type="text" id="cardNumber" placeholder="1234 5678 4356 7863" oninput="validateCardNumber()">
                        </div>
                    </div><!-- end cardno name -->
                    <!-- start expiry name -->
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Expiry</p>
                            <input class="form-control mb-3" type="text" placeholder="MM/YY" required>
                        </div>
                    </div><!-- end expiry name -->
                    <!-- start cvv -->
                    <div class="col-6" class="d-flex flex-column">
                        <!-- <div > -->
                            <!-- <p class="text mb-1">CVV/CVC</p>
                            <input type="password" class="form-control mb-3"  id="cvv"  placeholder="CVV/CVC" required> -->
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" name="lpassword" pattern="[0-9]{3}" placeholder="Password" required>
                        <!-- </div> -->


                    </div><!-- end cvv -->
                    <!--sunmit-->
                    <div class="col-12">
                        <button class="btn btn-primary mb-3" type="submit" name="sumbit">Submit</button>
                    </div>
                </div>
        </div>

    </div>
    </div>

    <?php
    // Check if the form was submitted
    if (isset($_POST['submit'])) {
        // Redirect to another page
        header('Location:success.php');
        exit;
    }
    ?>
    </form>
</body>

</html>