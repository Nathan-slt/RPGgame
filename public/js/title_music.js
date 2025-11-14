document.addEventListener('DOMContentLoaded', () => {
    const audio = document.getElementById('title_music');
    const urlParams = new URLSearchParams(window.location.search);
    const playParam = urlParams.get('play');

    const shouldPlay = (playParam === '1' || playParam === 'true');

    if (shouldPlay) {
        audio.play()
            .then(() => {
                if (window.history.replaceState) {
                    const cleanUrl = window.location.origin + window.location.pathname;
                    window.history.replaceState({}, '', cleanUrl);
                }
            })
            .catch(err => {
                document.addEventListener('click', () => {
                    audio.play();
                }, { once: true });
            });
    }
});