

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




