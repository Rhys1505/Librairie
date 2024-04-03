document.querySelector('.search').addEventListener('submit', function (event) {
    event.preventDefault(); // Empêche le rechargement de la page
    const searchTerm = document.querySelector('.searchInput').value;
    const apiUrl = 'https://www.googleapis.com/books/v1/volumes?q=' + encodeURIComponent(searchTerm) + '&langRestrict=fr';

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            const books = data.items || [];
            const resultsContainer = document.querySelector('.resultsContainer');
            resultsContainer.innerHTML = ''; // Efface les résultats précédents
            books.forEach(book => {
                const title = book.volumeInfo.title || 'Titre inconnu';
                const authors = book.volumeInfo.authors ? book.volumeInfo.authors.join(', ') : 'Auteur inconnu';
                const thumbnail = book.volumeInfo.imageLinks ? book.volumeInfo.imageLinks.thumbnail : 'https://via.placeholder.com/150'; // Placeholder si pas d'image

                const bookDiv = document.createElement('div');
                bookDiv.innerHTML = `
                    <h2>${title}</h2>
                    <p>Auteur(s): ${authors}</p>
                    <img src="${thumbnail}" alt="${title}">
                    <hr>
                `;
                resultsContainer.appendChild(bookDiv);
            });
        })
        .catch(error => {
            console.error('Erreur lors de la requête:', error);
        });
});