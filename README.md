# wikimedia-associate-eng-technical-task

This app is a form for the collection and review of user-submitted data. It collects the contact information and prospective donation information of users who might like to donate to the Wikimedia Foundation, and submits it to a MySQL database.

## Instructions

This app was tested on a local Apache2 server; credentials are stored in config.php.

The database connection is configured for the root user, and the password is stored as an environment variable. Set a local environment variable ROOT_PW, or alternatively, hard-code your password into config.php to access the install script.

On first opening the app, you can click through to run the install script or proceed to the form. On first use, run the install script to connect to MySQL and create a database with one table.

Once the database and table have been created, the form is ready to use! Submit your information and review.

