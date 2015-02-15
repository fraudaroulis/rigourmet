<?php

return array(

    'url' => 'http://myproject.local',

    'timezone' => 'UTC',

    'key' => 'ILivCeRCc5xSzPt7Lbdo0CP9BPSp5sVu',

    'providers' => append_config( array(

        /* Uncomment for use in development */
        'Way\Generators\GeneratorsServiceProvider', // Generators
        'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider', // IDE Helpers

        )
    ),

);