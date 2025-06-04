<?php

// Someone fix my syntax please!
// Clear the terminal screen
function clear() 
    {
    
    echo chr(27) . "[2J" . chr(27) . "[;H";
}

// Frames 
    // of the 
        // rotating microwave
$frames = [
<<<'EOD'
    +------------+
    | [::::::]   |
    |            |
    |   O        |
    +------------+
EOD
,
<<<'EOD'
    +------------+
    |   [::::::] |
    |            |
    |        O   |
    +------------+
EOD
,
<<<'EOD'
    +------------+
    |   [::::::] |
    |            |
    |        o   |
    +------------+
EOD
,
<<<'EOD'
    +------------+
    | [::::::]   |
    |            |
    |   o        |
    +------------+
EOD
];

// Loop foreverrrrrrrrrr
while (true) {
    foreach ($frames as $frame) {
                clear();
                echo $frame . "\n";
                usleep(150000); // 150ms delay
    }
}

// ECO{PuT_1t_iN_tH3_fR1dG3}