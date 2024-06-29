function fetchVerse() {
    fetch('src/fetch_verse.php')
        .then(response => response.json())
        .then(data => {
            document.getElementById('quote').innerHTML = '"' + data.verse + '"';
            document.getElementById('author').innerHTML = data.book;
        })
        .catch(error => console.error('Error fetching verse:', error));
}

document.getElementById('new-quote').addEventListener("click", fetchVerse);
window.onload = fetchVerse;
