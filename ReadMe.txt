Alexander Colle-Abbey
Alice Combernoux

The first thing to do is to change your login, password and database name. You can do it in the
file ../Bdd/cnx.php

Once this is done you will be able to navigate on our site "YourMarket", an online e-commerce site.

We have different folder :

- Bdd : Database, this is where we made the majority of our sql queries
- Image : You will find your images
- Lien: Access to different JS and CSS files
- Front : There are common php files for the different sub-folders 
	- Base : file before the connection of a user
	- Acheteur : file corresponding to the buyer
	- Vendeur: file corresponding to the seller
	- Admin : file corresponding to the admin

Now I will list the access to the different page in each of the sub-folders named just before:
	- Base : Home / House (sheet, pillow, decoration, all) / Clothes (t-shirt, sweat-shirt, shoes, all) / Bid/ Login / Registration
	- Acheteur: Home / House (sheet, pillow, decoration, all) / Clothes (t-shirt, sweat-shirt, shoes, all) / Bid/ Sale / Shopping Cart / Personal information / History
	- Vendeur: Item List / Add Item / Mail / Statistics / Personal information / Settings
	- Admin: Add Item / Item List / Add Seller / Seller List / Personal information


Let's start by explaining our different functions:

In the Base file :
	- You can see the list of items but nothing to add to the cart. An automatic redirection to the login page is done.
	- You can log in and register as a buyer or seller
	- You can see the list of all products and the list of all sellers (page index.php)

In the Acheteur file :
	- Same homepage as before
	- You can add a product to the cart
			--> remove a product from the cart
			--> change the quantity of a product in the cart
	- You can make an offer
			--> the information is then visible in the messaging section
	- You can bid on a product
			--> the information is then visible in the messaging section
	- Once the cart is finished you can pay 
			--> If the buyer has not enough money he can not buy his products
			--> If the buyer has enough money the purchased products are then accessible in the History part
	- In the History part you can note the products you just bought
	- He can also have access to offers in the balance page
	- In Personal Information you can change your payment and delivery information

In the Vendeur file: 
	- He has access to the list of his products
	- He can add a new item
	- He has access to a messenger to see his current negotiations
	- He can have access to his statistics
			--> See his turnover
			--> See the total of his sales by sub-category
			--> See the percentage of sales compared to his stocks
	- Access to the parameter to modify his screen overview
	- He can change the information of the brand

In the Admin file :
	- See the list of items
	- See the list of sellers (by category or not)
	- Add a seller
	- Add an item (as the admin is different from a seller the item is randomly assigned to a seller)
	- Statistics
	- It can change the information of the brand



Here is a list of the bonuses we have done:
	- Folder sorting
	- Instant message
	- New product
	- Fictitious money
	- Product rating
	- Statistics
	- Photo in database
	- Sort by 1- Brand
		2- Product
		3- Seller
	- Balance page
