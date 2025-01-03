document.getElementById('toggleFormButton').addEventListener('click', function () {
    const formDiv = document.getElementById('compareForm');
    if (formDiv.style.display === 'none' || formDiv.style.display === '') {
        formDiv.style.display = 'block';
    } else {
        formDiv.style.display = 'none';
    }
});