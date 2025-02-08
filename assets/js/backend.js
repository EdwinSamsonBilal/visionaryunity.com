
  window.onload = function() {
    // Check for success or error in the URL
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('success')) {
        alert('Your message has been sent successfully!');
    } else if (urlParams.has('error')) {
        alert('Oops! Something went wrong. Please try again.');
    } else if (urlParams.has('invalid_email')) {
        alert('The email address provided is invalid. Please check and try again.');
    }
  }
