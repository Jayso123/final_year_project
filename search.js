const scholarships = [
  "K.C.MAHINDRA EDUCATION TRUST",
  "Fair & Lovely Foundation - Women Scholarships",
  "Inlaks Scholarships",
  "NTPC Scholarship Scheme for Engineering Students, India",
  "Rashtriya Sanskrit Sansthan Scholarship",
  "L&T Build- India Scholarship, India",
  "LIC GOLDEN JUBILEE SCHOLARSHIP SCHEME",
  "BHARAT PETROLEUM - SCHOLARSHIP FOR HIGHER STUDIES",
  "HSBC Scholarship",
  "THE J.N. TATA ENDOWMENT",
  "Ratan Tata Trust  Awards Scholarships, India",
  "Lady Meherbai Tata Trust Scholarship",
  "British Council IELTS Scholarship",
  "RD Sethna Scholarship",
  "Jawaharlal Nehru Memorial Fund (JNMF) Scholarships",
  "Narotam Sekhsaria Scholarship",
  "Foundation for Excellence (FFE) Scholarship for Higher Education",
  "Merit cum Means Scholarship",
  "Post-Matric Scheme for Students from Minority. Community",
  "National Scholarship Portal",
  "IN SPIRE Scholarship",
  "Rashtriya Sanskrit Sansthan Scholarship",
  "Commonwealth Split-site Doctoral Scholarship 2011",
  "Late Karmaveer Patil 'Earn and Learn Scheme ",
  "Student Research Motivation Scheme",
  "Honble Vice- Chancellor Medical und",
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
      // Navigate to the search results page with the clicked suggestion as a parameter
      window.location.href = "../List_sch.html?q=" + encodeURIComponent(match);
    });
  });

  // Show or hide search results based on whether there are matches
  if (matches.length > 0) {
    searchResults.style.display = "block"; // Show search results if there are matches
  } else {
    searchResults.style.display = "none"; // Hide search results if no matches found
  }
}
// Construct the URL for the search results page
var searchResultsURL = "search_results.html?q=" + encodeURIComponent(query);

// Update the href attribute of the hyperlink to navigate to the search results page
document.getElementById("searchLink").href = searchResultsURL;
