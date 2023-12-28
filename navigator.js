function loadSection(sectionId) {
    var contentDiv = document.getElementById('content');

    // Make an AJAX request to fetch the content of the section
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                contentDiv.innerHTML = xhr.responseText;

                // Modify the URL without reloading the page
                history.pushState({ section: sectionId }, null, '#' + sectionId);
            } else {
                contentDiv.innerHTML = 'Error loading content.';
            }
        }
    };

    // Adjust the path to your HTML files accordingly
    xhr.open('GET', sectionId + '.php', true);
    xhr.send();
}

// Handle back and forward button events
window.onpopstate = function(event) {
    if (event.state && event.state.section) {
        loadSection(event.state.section);
    }
};
// redirect page with button
 function redirectToPage(targetPage) {
            // Get the values you want to pass
            var userValue = document.getElementById('user').value;
            var storeValue = document.getElementById('store').value;
  var hash = '#' + encodeURIComponent(user) + '-' + encodeURIComponent(store);

        // Update the URL with the hash
        window.location.hash = hash;
            // Construct the URL with parameters
            var url = targetPage + '?user=' + encodeURIComponent(userValue) +
                      '&store=' + encodeURIComponent(storeValue);
                      console.log('Updated URL:', window.location.href);
            // Redirect to the target page
            window.location.href = url;
        }


  // Function to set the last visited page in local storage
    function setLastVisitedPage() {
        // Use the fragment as the last visited page
        var currentPage = window.location.hash;
        localStorage.setItem('lastVisitedPage', currentPage);
    }

    // Function to get the last visited page from local storage
    function getLastVisitedPage() {
        return localStorage.getItem('lastVisitedPage');
    }

    // Call setLastVisitedPage() when the page loads
    setLastVisitedPage();

    // Example of how to use getLastVisitedPage()
    var lastVisitedPage = getLastVisitedPage();
    if (lastVisitedPage) {
        console.log('Last visited page:', lastVisitedPage);

        // Redirect to the last visited page (using the fragment)
        window.location.href = lastVisitedPage;
    } else {
        console.log('No last visited page recorded.');
    }