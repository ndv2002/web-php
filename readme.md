# Business Website using PHP MVC Framework

This is a business website built using PHP MVC (Model-View-Controller) framework. The website allows users to browse and purchase products and services offered by the business.

## Technologies Used
- PHP
- MySQL
- HTML/CSS
- Bootstrap
- JavaScript

## Getting Started
Clone this repository to your local machine.

Import the `database.sql` file to your MySQL server.

Update the **database connection** settings in the `config.php` file.

Launch the website in a web browser by navigating to the root directory.

## Features
1. User authentication (registration, login, 1. logout)
1. Browse products and services by category
1. Search products and services by keyword
1. Add products and services to cart
1. Checkout and payment processing
1. Order history and status tracking
1. Admin dashboard for managing products, services, orders, and users

## MVC Architecture
The website is built using the MVC (Model-View-Controller) architecture, which separates the application logic into three interconnected components:

- **Model:** Represents the data and business logic of the application. This includes database access, validation, and manipulation of data.
- **View:** Represents the user interface of the application. This includes HTML, CSS, and JavaScript code that renders the data from the model and interacts with the user.
- **Controller:** Acts as the intermediary between the model and view components. This handles user input, updates the model accordingly, and updates the view to reflect changes in the model.

## Folder Structure
```lua

├── admin
│   ├── controllers
│   ├── models
│   └── views
├── app
│   ├── controllers
│   ├── models
│   └── views
├── config
│   └── config.php
├── public
│   ├── css
│   ├── js
│   └── index.php
├── database.sql
└── README.md
```

## Contributors
- John Doe (johndoe@example.com)
- Jane Smith (janesmith@example.com)
## License
This project is licensed under the MIT License - see the LICENSE file for details.