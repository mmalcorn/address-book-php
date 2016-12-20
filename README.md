# PHP-AddressBook
#### By Meredith Alcorn

## Description
A basic address book application made using PHP that allows a person to store contact information.

## Specifications

#### A user enters a first name, last name, phone number, address, city, and state.
    Input:
    
    First Name: Meredith
    Last Name: Alcorn
    Phone Number: 609-000-0000
    Address: 456 North Crab Dr.
    City: Baltimore
    State: Maryland

* Example Output:
#### Redirected to the URL /contacts
    'Contact Added'
    Meredith Alcorn
    456 North Crab Dr.
    Baltimore, MD

## Setup/Installation Requirements

* Open the terminal and run the command > php -v
in order to see if you have PHP installed on your computer.
* If the above command was not found, install and configure the PHP development environment  -- visit the following link http://goo.gl/JDBJ0p for simple set-up instructions.
* Clone this repository: https://github.com/mmalcorn/address-book-php.git
* From the same place that you have cloned the repository, navigate to the top level of the project directory by typing > cd address-book-php
* Download and Install 'MAMP' by visiting: https://www.mamp.info/en/downloads/.
Windows users will need to install WAMP.  Again, visit http://goo.gl/JDBJ0p for simple set-up instructions.
* Download and Install PHP package manager called 'Composer'
* Inside of the terminal window, from the top level of the project folder (address-book-php), run the install command: > composer install
* Inside of the terminal window, navigate to the "web" folder, and run the command: > php -S localhost:8000.
* Now, in a web browser, you should be able to visit: http://localhost:8000/ to view the project.

## Known Bugs

No known bugs.

## Support and contact details

For comments or questions, please email alcornmeredith@gmail.com

## Technologies Used
* PHP 7.0.13
* Twig
* MAMP
* HTML/CSS
