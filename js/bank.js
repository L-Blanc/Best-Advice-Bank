const adviceForm = document.querySelector('#adviceForm');

// event listener for form submit
adviceForm.onsubmit = (e) => {
    // gets the names and current values from the form
    const formData = new FormData(adviceForm);

    // send data to PHP script on server
    fetch('bank.php', {
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
        // this replaces contents of the UL element with whatever
        // is sent back from shoutbox.php
        document.querySelector('ul').innerHTML = data;
        // clears the shout input field
        document.querySelector('#advice').value = '';
    })
    .catch( (error) => {
        console.error('Error in fetch: ', error);
    }); // end of fetch

    // prevent browser from refreshing page
    return false;
}; // end of shoutForm.onsubmit

function refresh_shoutbox() {
    // a differenst fetch function, same URL
    fetch('bank.php', {
      method: "POST",
headers: {
   'Content-type': 'application/x-www-form-urlencoded; charset=UTF-8'
      },
        // send one name-value pair not from a form
        body: 'refresher=1',
        credentials: "same-origin"
    })
    .then( (response) => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.text();
    })
    .then( (data) => {
        document.querySelector('ul').innerHTML = data;
    })
    .catch( (error) => {
        console.error('Error in fetch: ', error);
    }); // end fetch
} // end refresh function

refresh_shoutbox();
setInterval(refresh_shoutbox, 15000);
