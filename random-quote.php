<?php

function getRandomQuote() {
    $quotes = [
        'We are all worms. But I believe that I am a glow-worm. Winston Churchill',
        'Creativity is intelligence having fun. Albert Einstein',
        'Do more things that make you forget to check your phone. Unkown',
    ];

    return $quotes[array_rand($quotes)];
}