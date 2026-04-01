<?php

function ai_generate_content($prompt) {

    // DEMO MODE (no API key)
    if ($prompt) {
        return "Demo AI Response:\n\nYou entered: " . $prompt . "\n\nThis is a simulated AI-generated response. Replace with real API integration when ready.";
    }

    return "No prompt provided.";
}
