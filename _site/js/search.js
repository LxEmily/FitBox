 document.getElementById('search').onsubmit = function() {
        window.location = 'http://www.google.com/search?q=site:https://LxEmily.github.io/FitBox ' + document.getElementById('searchValue').value;
        return false;
    }