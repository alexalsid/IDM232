
var searchBtn = document.getElementById('mag-glyph');
var searchView = document.getElementById('searchview');
var exit = document.getElementById('exit')

function revealSearch() {
    searchView.className = 'display';
    exit.className = 'reveal';
    
};

function hideSearch() {

    searchView.className = 'no-display';
    exit.className = '';

    
};

searchBtn.addEventListener('click', revealSearch);
exit.addEventListener('click', hideSearch);



