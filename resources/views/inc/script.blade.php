<script>
    const myButton = document.getElementById("myButton");
    const myText = document.querySelector(".myText");
    const originalText = "{{ $dict->ru }}";
    myButton.addEventListener("click", function() {
        if (myText.innerHTML === "*********") {
            myText.innerHTML = originalText;
        } else {
            originalText
            myText.innerHTML = "*********";
        }
    });

    function convertToAudio(text) {

        const message = new SpeechSynthesisUtterance();
        message.text = text
        message.lang = "en-US";
        message.rate = 0.5;

        window.speechSynthesis.speak(message);

    }

    let addToFavoriteIcon = document.querySelector('.addToFavorite');
    let removeFromFavoriteIcon = document.querySelector('.removeFromFavorite');

    function addToFavorite(id) {
        addToFavoriteIcon.classList.add('hidden')
        removeFromFavoriteIcon.classList.remove('hidden')
        fetchQuery(id)
    }

    function removeFromFavorite(id) {
        fetchQuery(id)
        removeFromFavoriteIcon.classList.add('hidden')
        addToFavoriteIcon.classList.remove('hidden')
    }

    function fetchQuery(id) {
        fetch('api/toggle/' + id, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
            })
            .then(function(response) {
                if (response.ok) {
                    return response.text();
                } else {
                    throw new Error('Network response was not ok');
                }
            })
            .then(function(data) {
                console.log(data);
            })
            .catch(function(error) {
                console.error('There was a problem with the fetch operation:', error);
            });
    }
</script>
