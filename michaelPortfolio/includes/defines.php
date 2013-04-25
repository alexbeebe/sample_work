<?php
// Company specific
define("NAME", "Michael Shields");
define("HEADING", "Michael Shields Creative Designer");
define("IMAGE_FILE", "logo.jpg");
define("EMAIL", "shieldsmichael5951@yahoo.com");
define("ADDRESS", "17301 SE 24th St<br/> Vancouver, Wa 98683");
define("PHONE_NUMBER", "(360)356-2943");

// Image directories
define("IMAGE_PATH", "images");
define("THUMBS", "thumbs");
define("REMOTE_IMAGES", "images");
define("PICTURE", "images/picture.jpg");
define("LOGO", "images/logo.png");

// Field layout for data/products.csv
define("PRODUCT_ID_FIELD", 0);
define("PRODUCT_CATEGORY_FIELD", 1);
define("PRODUCT_NAME_FIELD", 2);
define("PRODUCT_PRICE_FIELD", 3);
define("PRODUCT_FEATURES_FIELD", 4);

// Field layout for data/cart.csv
define("CART_PRODUCTID_FIELD", 0);
define("CART_QUANTITY_FIELD", 1);

// Field layout for data/catids.csv
define("CATEGORY_ID_FIELD", 0);
define("CATEGORY_NAME_FIELD", 1);

// Field layout for data/inheritance.csv
define("INHERITANCE_PARENT_FIELD", 0);
define("INHERITANCE_CHILD_FIELD", 1);

// Field layout for data/pages.csv
define("PAGE_PAGE_FIELD", 0);
define("PAGE_NAME_FIELD", 1);

// Field layout for data/users.csv
define("USER_USERNAME_FIELD", 0);
define("USER_PASSWORD_FIELD", 1);
define("USER_FIRSTNAME_FIELD", 2);
define("USER_LASTNAME_FIELD", 3);
define("USER_ADDRESS1_FIELD", 4);
define("USER_ADDRESS2_FIELD", 5);
define("USER_CITY_FIELD", 6);
define("USER_STATE_FIELD", 7);
define("USER_ZIP_FIELD", 8);

// Root category
define("ROOT_CATEGORY", "C0000");

// Style page definitions
define("STYLES_PATH", "styles");
define("CATEGORY_STYLES_PAGE", "category.css");
define("PRODUCT_STYLES_PAGE", "product.css");
define("HOME", "data/home.css");
define("CART_STYLES_PAGE", "cart.css");
define("LOGIN_STYLES_PAGE", "login.css");
define("TYPE", "text/css");
define("STYLE", "stylesheet");

// Session array keys
define("SESSION_CART", "cart");
define("SESSION_RETURN_PAGE", "return_page");
define("LOGIN_RETURN_PAGE", "login_return_page");
define("SESSION_USERNAME", "username");

// Page names
define("HOME_PAGE", "home.php");
define("CATEGORY_PAGE", "showcat.php");
define("PRODUCT_PAGE", "product.php");
define("CART_PAGE", "showcart.php");
define("ADD_PRODUCT_PAGE", "addproduct.php");
define("CART_ACTION_PAGE", "cartaction.php");
define("CHECK_OUT_PAGE", "checkout.php");
define("LOGIN_PAGE", "login.php");
define("LOGIN_ACTION_PAGE", "loginaction.php");
define("LOGOUT_PAGE", "logout.php");

// Shopping cart button text/submit values
define("RETURN_TO_SHOPPING", "Return to Shopping");
define("CLEAR_SHOPPING_CART", "Clear Shopping Cart");
define("UPDATE_QUANTITIES", "Update Quantities");
define("CHECK_OUT", "Check Out");

// Login button text/submit values
define("LOGIN", "Login");
define("REGISTER", "Register");

// Login response codes and messages
define("LOGIN_MSG", "msg");
define("LOGIN_OK", 0);
define("LOGIN_OK_MSG", "");
define("LOGIN_BAD_USERNAME", 1);
define("LOGIN_BAD_USERNAME_MSG", "Error: Username incorrect. No such user found.");
define("LOGIN_BAD_PASSWORD", 2);
define("LOGIN_BAD_PASSWORD_MSG", "Error: Password is incorrect.");
define("LOGIN_BAD_ACTION", 3);
define("LOGIN_BAD_ACTION_MSG", "Error: Unknown action. Please press either the Login or Register button.");

// Registration response codes and messages
define("REGISTER_PASSWORD_MISMATCH", 4);
define("REGISTER_PASSWORD_MISMATCH_MSG", "Error: Your password doesn't match the password confirmation. Please try again.");
define("REGISTER_ADDRESS_UNSPECIFIED", 5);
define("REGISTER_ADDRESS_UNSPECIFIED_MSG", "Error: You must specify a street address when registering.");
define("REGISTER_USERNAME_EXISTS", 6);
define("REGISTER_USERNAME_EXISTS_MSG", "Error: The username is already in use. Please select a new one and try again.");
?>