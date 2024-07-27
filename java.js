document.getElementById('nutrition-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(event.target);
    const data = {
        age: formData.get('age'),
        weight: formData.get('weight'),
        height: formData.get('height'),
        geneticData: formData.get('genetic-data')
    };

    fetch('/recommendations', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(result => {
        document.getElementById('results').innerText = `Recommended Dietary Plan: ${result.recommendations}`;
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
