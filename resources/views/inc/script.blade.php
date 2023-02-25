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
</script>
