const searchData = [
    { id: 1, name: 'erik-van-dijk-tBdDvIk8vTA-unsplash.jpg' },
    { id: 2, name: '' },
    { id: 3, name: '' },
    { id: 4, name: '' },
    // ...
  ];

document.getElementById('search-btn').addEventListener('click', function() {
    const searchInput = document.getElementById('search-input').value;
    console.log(`Search query: ${searchInput}`);

    const results = searchData.filter(item => {
        return item.name.toLowerCase().includes(searchInput.toLowerCase());
    });
    const resultsList = document.getElementById('search-results');
    resultsList.innerHTML = '';
    results.forEach(item => {
        const listItem = document.createElement('li');
        listItem.textContent = item.name;
        resultsList.appendChild(listItem);
    });
});