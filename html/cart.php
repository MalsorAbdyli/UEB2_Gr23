<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment Checkout Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
	<link rel="stylesheet" href="../css/payment.css">
    
    <style>

        .pagesa{
            float: right;
            margin-top: -30px;
            margin-right: 180px;
        }

        .shporta {
          background-color: #f8f8f8;
            float: left;
            margin-top: 50px;
            margin-left: 280px;
            width: 330px;
            height: 613px;
            border-radius: 5px; /* Add a 1px solid black border */
    box-sizing: border-box; 
        }
        ul#cartItems {
  padding: 0;
  list-style-type: none;
}

ul#cartItems li {
  margin-bottom: 10px;
  background-color: #fff;
  padding: 10px;
  border-radius: 5px;
}

ul#cartItems li:last-child {
  margin-bottom: 0;
}

ul#cartItems li::before {
  content: "•";
  margin-right: 10px;
  color: #333;
}

ul#cartItems li:first-child::before {
  content: "";
}

ul#cartItems li.empty-message {
  text-align: center;
  font-style: italic;
  color: #888;
}
.button{
  
  background-color: #422500;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 5px;
  width: 287px;

}

.button1{
  background-color: #7a4c00; 
  color: black; 
  border: 2px solid #7a4c00;
}
.button1:hover {
  background-color: #7a4c00;
  color: white;
}

    </style>

</head>
<body>
<header>
    <div class="logo">
        <div class="logo">
            <img src="../img/logo.png" style="width: 90px; float: left; padding: 17px; margin-left: 3px; margin-top: 5px;">
        </div>
        <ul style="margin-left: 550px; list-style-type: none; padding: 25px;">
            <li style="display: inline-block; margin-left: 40px;">
                <a href="../html/index.php" style="color: white !important; text-transform: uppercase; font-weight: 5px; font-size: 20px; transition: all 0.5s ease-in;">Home</a>
            </li>
            <li style="display: inline-block; margin-left: 40px;">
                <a href="../html/rrethnesh.php" style="color: white !important; text-transform: uppercase; font-weight: 5px; font-size: 20px; transition: all 0.5s ease-in;">Porosite</a>
            </li>
            <li style="display: inline-block; margin-left: 40px;">
                <a href="../html/investimet.php" style="color: white !important; text-transform: uppercase; font-weight: 5px; font-size: 20px; transition: all 0.5s ease-in;">Investimet</a>
            </li>
            <li style="display: inline-block; margin-left: 40px;">
                <a href="../html/kontakti.php" style="color: white !important; text-transform: uppercase; font-weight: 5px; font-size: 20px; transition: all 0.5s ease-in;">Kontakti</a>
            </li>
            <li style="display: inline-block; margin-left: 40px;">
                <a href="https://heyzine.com/flip-book/8b2a28de50.html" style="color: white !important; text-transform: uppercase; font-weight: 5px; font-size: 20px; transition: all 0.5s ease-in;">Menu</a>
            </li>
            <li style="display: inline-block; margin-left: 40px;">
                <a href="../html/rrethnesh.html" style="color: white !important; text-transform: uppercase; font-weight: 5px; font-size: 20px; transition: all 0.5s ease-in;">Logout</a>
            </li>
            <li style="display: inline-block; margin-left: 40px;">
                <a href="../html/cart.php" style="color: white !important; text-transform: uppercase; font-weight: 5px; font-size: 20px; transition: all 0.5s ease-in;">Cart</a>
            </li>
        </ul>
    </div>
</header>

<form class="form" action="proccess_payment.php" method="POST">

<div class="pagesa">
  <div class="wrapper">
    <div class="payment">
      <div class="payment-logo">
        <p><img src="../img/icon.png" style="height: 65px; width:65px; margin-top:15px" ></p>
      </div>

      <h2>Payment Gateway</h2>
      <div class="form">
        <div class="card space icon-relative">
          <label class="label">Card holder:</label>
          <input type="text" class="input" placeholder="Name" name="emri" required id="upperField1">
          <i class="fas fa-user"></i>
        </div>
        <div class="card space icon-relative">
          <label class="label">Card number:</label>
          <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="Card Number" name="karta" required>
          <i class="far fa-credit-card"></i>
        </div>
        <div class="card-grp space">
          <div class="card-item icon-relative">
            <label class="label">Expiry date:</label>
            <input type="text" name="data" class="input" data-mask="00 / 00" placeholder="00 / 00" required>
            <i class="far fa-calendar-alt"></i>
          </div>
          <div class="card-item icon-relative">
            <label class="label">CVC:</label>
            <input type="text" class="input" data-mask="000" placeholder="000" name="kodi" required>
            <i class="fas fa-lock"></i>
          </div>
        </div>

        <div class="card space icon-relative">
          <label class="label">Shipping address:</label>
          <input type="text" class="input" placeholder="Address" name="adresa" required id="upperField2">
          <i class="fas fa-map-marker-alt"></i>
        </div>

        <div>
        <button id="payButton" class="button button1" name="paguaj" disabled type="submit">Pay</button>
        </div> 

      </div>
    </div>
  </div>
</div>
</form>

<div class="shporta">
<h1 style="color: #422500;font-family: 'Ubuntu', sans-serif; text-align:center; margin-top:20px">CART</h1>
  <ul id="cartItems" style="color: #7a4c00; margin-top:15px; font-family: 'Ubuntu', sans-serif;text-align:center; margin-top:20px"></ul>
  <div id="cartItems"style="color: #7a4c00;font-family: 'Ubuntu', sans-serif;text-align:center;"></div>
<div id="totalPrice"style="color:#7a4c00; margin-top: 15px; text-transform: uppercase; font-size: 24px; font-weight: bold; font-style:italic;font-family: 'Ubuntu', sans-serif;text-align:center;"></div>
</div>
    
<script>
  // Retrieve the cart items from local storage
  let cartItems = localStorage.getItem('cartItems');
  if (cartItems) {
    cartItems = JSON.parse(cartItems);

    // Get the element where you want to display the cart items and total price
    const cartElement = document.getElementById('cartItems');

    // Initialize the total price to 0
    let totalPrice = 0;

    // Iterate over the cart items
    for (let i = 0; i < cartItems.length; i++) {
      const item = cartItems[i];

      // Create a new div element to represent the cart item
      const itemElement = document.createElement('div');

      // Create a paragraph element to display the item name and price
      const itemTextElement = document.createElement('p');
      itemTextElement.textContent = item.name + ' - ' + item.price;

      // Create a button element for removing the item
      const removeButton = document.createElement('button');
      removeButton.textContent = 'Remove';
      removeButton.addEventListener('click', () => {
        // Remove the item from the cartItems array
        cartItems.splice(i, 1);

        // Update the cart items in local storage
        localStorage.setItem('cartItems', JSON.stringify(cartItems));

        // Remove the item element from the cart element
        cartElement.removeChild(itemElement);

        // Recalculate the total price
        totalPrice -= parseFloat(item.price);

        // Update the total price element
        totalPriceElement.textContent = 'Total Price: $' + totalPrice.toFixed(2);
      });

      // Append the item text and remove button to the item element
      itemElement.appendChild(itemTextElement);
      itemElement.appendChild(removeButton);

      // Append the item element to the cart element
      cartElement.appendChild(itemElement);

      // Extract the numeric price from the item string (e.g., '10.00' -> 10.00)
      const numericPrice = parseFloat(item.price);

      // Add the numeric price to the total price
      totalPrice += numericPrice;
    }

    // Get the element where you want to display the total price
    const totalElement = document.getElementById('totalPrice');

    // Create a new paragraph element to display the total price
    const totalPriceElement = document.createElement('p');
    totalPriceElement.textContent = 'Total Price: $' + totalPrice.toFixed(2);

    // Append the total price element to the total element
    totalElement.appendChild(totalPriceElement);

    // Get the "Pay" button element
    const payButton = document.getElementById('payButton');
    if (cartItems && cartItems.length > 0) {
      payButton.disabled = false;
    } else {
      payButton.disabled = true;
    }

    payButton.addEventListener('click', () => {
      // Check if the upper fields are filled before proceeding with the payment
      const upperField1 = document.getElementById('upperField1').value;
      const upperField2 = document.getElementById('upperField2').value;
      if (upperField1.trim() === '' || upperField2.trim() === '') {
        alert('Please fill all the fields, before making the payment!');
        return;
      }

      // Perform payment processing here
      if (cartItems && cartItems.length > 0) {
        // Payment processing logic here
        // Replace the alert with your actual payment processing code
        alert('Payment of ' + totalPrice.toFixed(2) + ' is successful!');

        // Clear the cart items
        localStorage.removeItem('cartItems');
        cartElement.innerHTML = '';
        totalElement.innerHTML = '';

       
      }
    });
  }
</script>



	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</body>
</html>