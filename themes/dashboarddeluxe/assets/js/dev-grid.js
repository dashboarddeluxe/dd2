const padOptions = ["0", "1", "2", "3", "4", "5", "6", "8", "10", "12", "16", "20", "24", "32", "40", "48", "56", "64"];
const colOptions = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"];
const gapOptions = ["0", "1", "2", "3", "4", "5", "6", "8", "10", "12", "16"];

/* helper function to remove a class attribute from an element */
function removeClassWith(e, part) {
    var regx = new RegExp('(^|\\s)\\S*' + part + '\\S*', 'g');
    e.className = e.className.replace(regx, '');
}

function setGridVisibility(data) {
    var showGrid = data;
    var e = document.querySelector("#grid-area");
    if (e.classList.contains("hidden") == showGrid) {
        e.classList.toggle("hidden");
    }

    sessionStorage.setItem("showGrid", showGrid);
}

function changeGridVisibility() {
    var e = document.querySelector("#grid-area");
    var showGrid = e.classList.contains("hidden") ? true : false;
    setGridVisibility(showGrid);
}

function setupGridIndicator() {
    /* load variables from local storage */
    var showGrid = sessionStorage.getItem("showGrid") === "true";

    setGridVisibility(showGrid);
}

document.addEventListener('DOMContentLoaded', function() {
    setupGridIndicator();
});