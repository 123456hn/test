    <?php 
include 'config.php';

session_start();
$user = $_SESSION['username'];

$db = new Database();
$db->select('options','site_name',null,null,null,null);
$site_name = $db->getResult();



$params1 = [
    'item_number' => $_POST['product_id'],
    'payment_gross' => $_POST['product_total'],
    'payment_status' => 'credit',
];
$params2 = [
    'product_id' => $_POST['product_id'],
    'product_qty' => $_POST['product_qty'],
    'total_amount' => $_POST['product_total'],
    'product_user' => $_SESSION['user_id'],
    'order_date' => date('Y-m-d'),
];
$db = new Database();
$db->insert('payments',$params1);
$db->insert('order_products',$params2);
$db->getResult();
?>



<!-- Contact form -->
<!DOCTYPE html>
<style>
    input[type=text], select, textarea {
  width: 100%; 
  padding: 12px; 
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical 
}



input[type=submit]:hover {
  background-color: #45a049;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
    </style>
<body>
<div class="container">
  <form action="action_page.php" method="post">

    <label for="fname">Name</label>
    <input type="text" id="fname" name="first_name"   placeholder="Your name..">

    <label for="lname">Contact Number</label>
    <input type="text" id="lname" name="contact_Number" placeholder="Contact Number..">

    <label for="lname">Enter Your Email</label>
    <input type="text" id="lname" name="email"   placeholder="Enter Your Email..">

    <label for="country">Country</label>
    <select id="country"name="address">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="canada">Pakistan</option>
      <option value="canada">India</option>
      <option value="canada">England</option>
      <option value="canada">Russia</option>
      <option value="canada">Japan</option>
      <option value="canada">Koria </option>
      <option value="canada">Brazil</option>
    </select>

    <label for="Address">Address:</label>
               <input type="text" name="address" id="Address">
   <button type="submit" value="Submit"> SUBMIT</button>
   

  </form>
</div>
</div>
</body>
</html>