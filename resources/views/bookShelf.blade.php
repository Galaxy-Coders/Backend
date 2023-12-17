<x-main>
  <div class="shelf-book">
    <div class="container">
      <div class="left">
        <div class="img" style="background-image: url(/storage/{{ $book->cover }});"></div>
      </div>
      <div class="right">
        <h1>Audio fayl</h1>
        <div class="audio-player">
          <audio id="audio" controls>
            {{-- /2. Benjamin Ingrosso & Alan Walker - Man On The Moon.mp3 --}}
            <source src="/Storage/{{ $book->audio }}" type="audio/mpeg">
            Sizning brouzeriningiz audio materialni qo'llab quvvatlamaydi.
          </audio>
          <div class="top-audio">
            <div id="current-time">
              <p>0:00</p>
            </div>
            <div class="progress">
              <div class="progress-bar" id="progress-bar"></div>
            </div>
            <div id="total-time">
              <p>0:00</p>
            </div>
          </div>
          <div class="controls">
            <img src="/imgs/forward-svgrepo-com.svg" alt="" onclick="skip('forward')">
            <img src="/imgs/play-svgrepo-com.svg" alt="" id="play-pause-button" onclick="togglePlay()">
            <img src="/imgs/forward-svgrepo-com.svg" alt="" onclick="skip('backward')">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="pdf-reader">
    <iframe src="/storage/{{ $book->document }}" frameborder="0" width="100%" height="100vh" controls></iframe>
  </div>

  <script>
    const audio = document.getElementById("audio");
    const playPauseButton = document.getElementById("play-pause-button");
    const progressBar = document.getElementById("progress-bar");
    const currentTimeDisplay = document.getElementById("current-time");
    const totalTimeDisplay = document.getElementById("total-time");
    const pdfReader = document.querySelector('.uniframe');

    let isPlaying = false;

    function togglePlay() {
      if (isPlaying) {
        audio.pause();
        playPauseButton.src = "/imgs/play-svgrepo-com.svg";
      } else {
        audio.play();
        playPauseButton.src = "/imgs/pause-svgrepo-com.svg";
      }
      isPlaying = !isPlaying;
    }

    function skip(direction) {
      const skipAmount = 5;
      if (direction == 'backward') {
        audio.currentTime += skipAmount;
      } else if (direction == 'forward') {
        audio.currentTime -= skipAmount;
      }
    }

    audio.addEventListener("timeupdate", () => {
      const currentTime = audio.currentTime;
      const duration = audio.duration;

      const currentMinutes = Math.floor(currentTime / 60);
      const currentSeconds = Math.floor(currentTime % 60);
      const totalMinutes = Math.floor(duration / 60);
      const totalSeconds = Math.floor(duration % 60);

      currentTimeDisplay.innerHTML = `<p>${currentMinutes}:${currentSeconds < 10 ? '0' : ''}${currentSeconds}</p>`;
      totalTimeDisplay.innerHTML = `<p>${totalMinutes}:${totalSeconds < 10 ? '0' : ''}${totalSeconds}</p>`;

      const progress = (currentTime / duration) * 100;
      progressBar.style.width = `${progress}%`;
    });
  </script>
</x-main>