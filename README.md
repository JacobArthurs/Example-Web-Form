# Developed by: Jacob Arthurs
## Visit the project here: https://jacobarthurs.github.io/Example-Web-Form/

This is an example project I created in order to demonstrate my web development aptitude. This project is broken up into 4 distinct parts: the HTML, the CSS, the PHP, and the SQL. I opted to make this project with 4 simple files instead of a framework such as ASP.net simply because with a project of this size it seemed impractical. I also opted to not use a complex library such as react based on the same reasoning. This project is compatible with all screen sizes, including smartphones.

## The HTML

Within the HTML section the first thing you will notice is that I decided to import bootstrap and jQuery. Bootstrap and jQuery made the entire process much simpler. Everything within the HTML section is broken up into: the body, and the footer. The body contains both an image, and a form. Bootstrap's column classes were used to separate these two sections. The image and text located on the left side of the body's size is dependent on the users screen width, and will scale to accompany it. The form is located on the right side of the body and will also scale to accompany the users screen width. I opted to not use the form tag because I thought it to be more effective to use an ajax call instead of the form built in action attribute. At the bottom of the HTML document you can see the ajax call with the jQuery code. I chose to do inline JavaScript because of the low amount of JS code needed for this project. This ajax call is only called once the submit button is pushed. It sends the data located within the fields to the PHP file to be validated. The PHP file will send back either a success code or a failure code along side a failure message. A snackbar is displayed to the screen indicating the outcome of submitting the inputs. This snackbar will fade in and out based on the setTimeout function, and the styling located in the CSS file. If the inputs are successfully validated and added to the SQL table then it will state that everything is clear. If the inputs are not successfully validated and added to the SQL table then it will state the fields the user may have missed entering, or the invalid fields the user may have entered.

## The CSS

Within the CSS section there are numerous different classes and id's that are being styled. The fonts included in this project are: Montserrat Bold, and Open sans. Montserrat Bold was used for headings, while open sans was used for body text. The colors used for this project are: Blue: #0071F5, and Gray: #D9D9D9. Further down the css file you will see the resizing options for the body image located on the left side (Hero image). The css will resize the hero image and text located on top of it based on how big the screen width is. I had to use if statements to detect screen width because the vw units did not resize as desired. Near the bottom of the css file you will see the rules for how the snackbar works. I used keyframes to animated the snackbar fadein / fadeout of the screen from the bottom, as well as I added classes to show the snackbar.

## The PHP

Within the PHP section the first line is a connection to the db "localhost" using mysql. The PHP file goes through each user input and checks if it is empty. If any input is left empty by the user an error message is append to the errorMsg variable. The email is also checked to be a valid email. Near the bottom of the PHP document there are checks to see if there were any errors. If the errorMsg variable is empty no errors were detected and the inputs will be queried into the db using mysql. If the query fails it is detected and the errorMsg and code is updated accordingly. If the errorMsg is not empty and errors were detected, the PHP will send back an error code along with the errorMsg.

## The SQL

The database is set up with the name "new_db" and the table is set up with the name "contacts". Within the contacts table there are 5 columns of data. They include: id, name, email, phoneNo, and industry. All of these columns are varchars with varying length. The id data field is a primary key used to access specific rows of data for whenever this may be needed.
