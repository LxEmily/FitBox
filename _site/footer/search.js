 document.getElementById('search').onsubmit = function() {
        window.location = 'http://www.google.com/search?q=site:http://csserver.ucd.ie/~17200573/project/ ' + document.getElementById('searchValue').value;
        return false;
    }