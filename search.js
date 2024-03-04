const scholarships = [
  " K.C.MAHINDRA EDUCATION TRUST",
  "Fair & Lovely Foundation - Women Scholarship",
  "INLAKS RESEARCH TRAVEL GRANTS",
  "Inlaks Scholarships",
  "NTPC Scholarship Scheme for Engineering Students, India",
];

// Function to display search results
function displaySearchResults(query) {
  const searchResults = document.getElementById("searchResults");
  searchResults.innerHTML = ""; // Clear previous results

  // Regular expression to match the query (case insensitive)
  const regex = new RegExp(query, "i");

  // Filter scholarships array based on the query
  const matches = scholarships.filter((scholarship) => regex.test(scholarship));

  // Display each matching scholarship as a list item
  matches.forEach((match) => {
    const li = document.createElement("li");
    li.textContent = match;
    searchResults.appendChild(li);
    // Add click event listener to fill the search bar with the clicked suggestion
    li.addEventListener("click", function () {
      document.getElementById("home_search").value = match;
      searchResults.style.display = "none"; // Hide search results after selecting a suggestion
    });
  });

  // Show or hide search results based on whether there are matches
  if (matches.length > 0) {
    searchResults.style.display = "block"; // Show search results if there are matches
  } else {
    searchResults.style.display = "none"; // Hide search results if no matches found
  }
}

// Event listener for input changes
document.getElementById("home_search").addEventListener("input", function () {
  const query = this.value.trim(); // Get the trimmed value of the search input
  displaySearchResults(query); // Call the displaySearchResults function with the query
});

// Event listener to hide search results when clicked outside
document.addEventListener("click", function (event) {
  const searchbox = document.getElementById("searchbox");
  const searchResults = document.getElementById("searchResults");

  // Check if the clicked element is outside the search box
  if (!searchbox.contains(event.target)) {
    searchResults.style.display = "none"; // Hide search results
  }
});
