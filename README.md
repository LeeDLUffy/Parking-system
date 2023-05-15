# Parking-system


Welcome to the Kenya Express Parking System! This application is designed to efficiently manage parking spaces, allocate available spots, charge customers on an hourly basis, and generate receipts upon payment. With its user-friendly interface and robust functionality, managing parking spaces has never been easier. It provides an efficient solution for organizing and tracking parking activities. Here's everything you need to know to get started:


Features


Parking Space Management: The system keeps track of available parking spaces and assigns them to vehicles as they arrive.
Allocation: When a vehicle enters the parking lot, the system checks for available spaces and assigns the nearest available space.
Hourly Charging: The system calculates the parking fee based on the duration of stay, charging on an hourly basis.
Receipt Generation: After the payment is made, the system generates a receipt containing essential details such as vehicle information, duration of stay, and total amount paid.


Prerequisites

To run this parking system, ensure that you have the following:

Web server (e.g., Apache)
PHP (version 7.0 or higher)
MySQL (or any other supported database)


Installation

Clone or download this repository to your local machine.
Place the files in your web server's document root directory.
Create a new MySQL database and import the provided database.sql file to set up the required tables.
Configure the database connection by updating the config.php file with your database credentials.


Usage

Access the system by visiting the URL where it is hosted.
The home page will display the current status of parking spaces, including the number of available and occupied spaces.
When a vehicle arrives, click on the "Allocate Space" button to assign a parking space.
Enter the vehicle details (e.g., license plate number, vehicle type) and click "Allocate" to assign the nearest available space.
The system will calculate the parking fee based on the duration of stay, charging per hour.
After the vehicle has parked, the status will be updated, and the corresponding parking fee will be displayed.
When the vehicle is ready to leave, click on the "Payment" button to proceed with payment.
Enter the payment details and confirm the payment.
The system will generate a receipt with all the necessary information, including vehicle details, duration of stay, and total amount paid.


Contributing

Contributions to this parking system are welcome. If you find any issues or have suggestions for improvements, please feel free to submit a pull request or open an issue on the GitHub repository.


License

This project is licensed under the MIT License. You are free to use, modify, and distribute the code for personal and commercial purposes.


Acknowledgments

Bootstrap - Used for the responsive design and UI components.
jQuery - Used for DOM manipulation and AJAX requests.
PHPMailer - Used for sending email notifications.


Contact

For any inquiries or feedback, please contact us at [email protected]

Happy parking!
