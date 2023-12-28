<?php
  $connection = mysqli_connect("localhost","root","","zsupply");
  ?>

<script type="text/javascript">
function redirectToPage(targetPage) {
      // Get the values you want to pass
      var userValue = document.getElementById('user').value;
      var storeValue = document.getElementById('store').value;

      // Construct the URL with parameters
      var url = targetPage + '?user=' + encodeURIComponent(userValue) +
                '&Warehouse=' + encodeURIComponent(storeValue);

      // Redirect to the target page
      window.location.href = url;
  }
    // Function to set the last visited page in local storage
  function setLastVisitedPage() {
      var currentPage = window.location.href;
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
  } else {
      console.log('No last visited page recorded.');
  }
</script>
