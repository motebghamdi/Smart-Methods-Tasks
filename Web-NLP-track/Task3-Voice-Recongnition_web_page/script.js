document.addEventListener('DOMContentLoaded', function () {
  const startButton = document.getElementById('startButton');
  const statusMessage = document.getElementById('statusMessage');
  const outputMessage = document.getElementById('outputMessage');

  let isListening = false;

  if ('webkitSpeechRecognition' in window) {
    const recognition = new webkitSpeechRecognition();

    recognition.continuous = false;
    recognition.interimResults = false;
    recognition.lang = 'en-US';

    recognition.onstart = function () {
      isListening = true;
      statusMessage.innerText = 'I am Listening, start speaking...';
    };

    recognition.onresult = function (event) {
      const result = event.results[0][0].transcript;
      outputMessage.innerText = `You said: "${result}"`;

      // Call the function to send the captured message to the server
      sendToServer(result);

      isListening = false;
    };

    recognition.onend = function () {
      if (isListening) {
        statusMessage.innerText = 'Press to Listening';
        isListening = false;
      }
    };

    startButton.addEventListener('click', function () {
      if (!isListening) {
        recognition.start();
      }
    });
  } else {
    startButton.disabled = true;
    statusMessage.innerText = 'Speech recognition is not supported in this browser.';
  }

  // Function to send the captured message to the server
  function sendToServer(message) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'save_message.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // If the server successfully stores the message, do something (optional).
        console.log(xhr.responseText);
      }
    };
    const data = 'message=' + encodeURIComponent(message);
    xhr.send(data);
  }
});