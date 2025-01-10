
// HIde And Show Home Page Searching

// Get references to the elements
let show_search_btn = document.getElementsByClassName("show-search-btn")[0]; // Assuming you only have one element with this class
let searching = document.getElementsByClassName("searching")[0]; // Assuming you only have one element with this class
let xmark = document.getElementsByClassName("fa-xmark")[0]; // Assuming you only have one element with this class

// Function to show search
function show_search() {
    searching.classList.add("show");
}
// Function to hide search
function hide_search() {
    searching.classList.remove("show");
}