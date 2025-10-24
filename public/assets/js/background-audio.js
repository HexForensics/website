/*--------------------
Background Audio Controller
--------------------*/

document.addEventListener('DOMContentLoaded', function() {
    const audio = document.getElementById('backgroundAudio');
    let audioStarted = false;

    // Check if device is mobile
    const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || window.innerWidth <= 768;
    
    if (isMobile) {
        console.log('Mobile device detected - audio disabled');
        return; // Exit early on mobile devices
    }

    // Set volume to 1%
    if (audio) {
        audio.volume = 0.01;
        console.log('Audio element found, volume set to 1%');
    } else {
        console.log('Audio element not found!');
        return;
    }

    // Function to play audio
    function startAudio() {
        if (audio && !audioStarted) {
            audio.muted = false;
            audio.play().then(() => {
                audioStarted = true;
                console.log('Background audio started successfully');
                // Remove all event listeners once audio starts
                removeAllListeners();
                // Remove debug event listeners to stop console logging
                removeDebugListeners();
            }).catch(e => {
                console.log('Audio play failed:', e);
            });
        }
    }

    function removeAllListeners() {
        document.removeEventListener('mousemove', startAudio);
        document.removeEventListener('scroll', startAudio);
        document.removeEventListener('click', startAudio);
        document.removeEventListener('keydown', startAudio);
        document.removeEventListener('touchstart', startAudio);
        document.removeEventListener('mouseenter', startAudio);
        window.removeEventListener('focus', startAudio);
    }

    function removeDebugListeners() {
        audio.removeEventListener('loadstart', loadStartHandler);
        audio.removeEventListener('canplaythrough', canPlayThroughHandler);
        audio.removeEventListener('error', errorHandler);
    }

    // Define handlers so they can be removed later
    const loadStartHandler = () => console.log('Audio loading started');
    const canPlayThroughHandler = () => {
        console.log('Audio can play through');
        if (!audioStarted) {
            startAudio();
        }
    };
    const errorHandler = (e) => console.log('Audio error:', e);

    // Add multiple event listeners for immediate trigger
    document.addEventListener('mousemove', startAudio, { once: true });
    document.addEventListener('scroll', startAudio, { once: true });
    document.addEventListener('click', startAudio, { once: true });
    document.addEventListener('keydown', startAudio, { once: true });
    document.addEventListener('touchstart', startAudio, { once: true });
    document.addEventListener('mouseenter', startAudio, { once: true });
    window.addEventListener('focus', startAudio, { once: true });

    // Attempt immediate autoplay
    setTimeout(() => {
        if (!audioStarted) {
            console.log('Attempting immediate autoplay...');
            startAudio();
        }
    }, 100);

    // Fallback: try after page is fully loaded
    window.addEventListener('load', () => {
        setTimeout(() => {
            if (!audioStarted) {
                console.log('Attempting autoplay after page load...');
                startAudio();
            }
        }, 500);
    });

    // Audio event listeners for debugging (will be removed after audio starts)
    audio.addEventListener('loadstart', loadStartHandler);
    audio.addEventListener('canplaythrough', canPlayThroughHandler);
    audio.addEventListener('error', errorHandler);

    // Handle page visibility changes - pause when user leaves tab/minimizes browser
    document.addEventListener('visibilitychange', function() {
        if (audio && audioStarted) {
            if (document.hidden) {
                // User left the tab/minimized browser - pause audio
                audio.pause();
                console.log('Audio paused (tab hidden)');
            } else {
                // User returned to the tab - resume audio
                audio.play().catch(e => {
                    console.log('Failed to resume audio:', e);
                });
                console.log('Audio resumed (tab visible)');
            }
        }
    });

    // Handle window blur/focus - additional fallback for some browsers
    window.addEventListener('blur', function() {
        if (audio && audioStarted && !audio.paused) {
            audio.pause();
            console.log('Audio paused (window lost focus)');
        }
    });

    window.addEventListener('focus', function() {
        if (audio && audioStarted && audio.paused) {
            audio.play().catch(e => {
                console.log('Failed to resume audio:', e);
            });
            console.log('Audio resumed (window gained focus)');
        }
    });
});