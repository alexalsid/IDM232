

var filterMenu = document.getElementById('all-filters');
var filterBtn = document.getElementById('filter');
var filterExit = document.getElementById('exit-filter');


function revealMenu() {
    filterMenu.className = 'filter-menu';
};

function hideMenu() {
    filterMenu.className = 'off-filter-menu';
};


filterBtn.addEventListener("click", revealMenu);
filterExit.addEventListener("click", hideMenu);


var searchView = document.getElementById('searchview');
var searchBtn = document.getElementById('search-glyph');
var searchExit = document.getElementById('exit');

function revealSearch() {
    searchMenu.className = 'display';
};

function hideSearch() {
    searchMenu.className = 'no-display' 
};


searchBtn.addEventListener("click", revealSearch);
searchExit.addEventListener("click", hideSearch);

