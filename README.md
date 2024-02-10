## E-Commerce-Platform

### Description:
Created a dynamic web application for an online marketplace that allows users to sign up, log in, and perform various actions such as uploading products, viewing products, adding them to the cart, and placing orders.

### Technologies Used:

HTML, CSS, JavaScript
PHP for server-side scripting
MySQL for database management
Bootstrap framework for responsive design

### Key Features:

User Authentication : Implemented a secure user authentication system with features like sign-up, login, and logout.
Role-based Access Control : Distinguished between vendors and customers, providing different functionalities based on user roles.

### Product Management:
Vendors can upload products with details such as name, price, and description.
Customers can view the available products, add them to the cart, and place orders.

### Shopping Cart:
Implemented a shopping cart functionality for customers to add and remove items.
Displayed the total amount before placing an order.

### Order Placement:
Allowed customers to place orders, which updates the database with order details.
Calculated the total amount for the order.

### Additional Features:
Implemented a session-based authentication system.
Included client-side validation for password matching during sign-up.
Designed a responsive and user-friendly interface using Bootstrap.

### Project Files:
signup.html, login.html : User registration and login interfaces.

signup.php, login.php : Server-side scripts for user authentication and registration.

home.php (vendor and customer) : Dashboard for vendors and customers with distinct features.

upload.php : Handles the uploading of products by vendors.

view.php : Displays the products uploaded by vendors.

addcart.php, viewcart.php : Manages shopping cart functionality for customers.

place_order.php : Allows customers to place orders and calculates the total amount.

removecart.php : Removes items from the shopping cart.

authguard.php : Implements role-based access control for vendor and customer functionalities.

connection.php : Manages database connection.
