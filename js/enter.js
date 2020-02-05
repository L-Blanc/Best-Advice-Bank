/* this file contains one event listener for enter_new_record.php.
    the JavaScript here acts as a bridge between the HTML form
    in enter_new_record.php and the PHP script in enter.php -
    which writes the new record into the database.
*/

// this is the form in enter_new_record.php -
const adviceform = document.querySelector('#adviceform');

// this is a DIV in enter_new_record.php -
const response_content = document.querySelector('#response');

// this DIV contains the form in enter_new_record.php -
const advice_form = document.querySelector('#wrapper');
// show the DIV if it is hidden
advice_form.style.display = 'block';


// event handler
adviceform.onsubmit = (e) => {
    // gets the names and current values from the form
    const formData = new FormData(adviceform);
    // FETCH
    fetch('enter.php', {
        method: "POST",
        body: formData,
        credentials: "same-origin"
    })
    .then( (response) => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.text();
    })
    .then( (data) => {
        advice_form.style.display = 'none';
        response_content.innerHTML =
        "<p class='announce'>" + data + "</p>" +
        "<p class='announce' ><a href='index.html'>Return to the form</a></p>"  +
        "<p class='announce' ><a href='inventory_update.php'>See all nuggets.</a></p>";
    })
    .catch( (error) => {
        console.error('Error in fetch: ', error);
    }); // end of FETCH
    return false;
}; // end sockform.onsubmit
