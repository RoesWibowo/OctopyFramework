<?php

/**
 *   ___       _
 *  / _ \  ___| |_ ___  _ __  _   _
 * | | | |/ __| __/ _ \| '_ \| | | |
 * | |_| | (__| || (_) | |_) | |_| |
 *  \___/ \___|\__\___/| .__/ \__, |
 *                     |_|    |___/
 * @author  : Supian M <supianidz@gmail.com>
 * @link    : www.octopy.xyz
 * @license : MIT
 */

namespace Octopy\Console\Command;

use Exception;

use Octopy\Console\Argv;
use Octopy\Console\Output;
use Octopy\Console\Command;

class MakeSeederCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'make:seeder';

    /**
     * @var string
     */
    protected $description = 'Create a new seeder class';

    /**
     * @param  Argv   $argv
     * @param  Output $output
     * @return string
     */
    public function handle(Argv $argv, Output $output)
    {
        try {
            $parsed = $this->parse($argv);
        } catch (Exception $exception) {
            return $output->error('Not enough arguments (missing : "name").');
        }
        
        if (file_exists($location = $this->app['path']->app->DB->seeder($parsed['location']))) {
            return $output->warning('Seeder already exists.');
        }
        
        $data = [
            'DummyClassName' => $parsed['classname'],
        ];
        
        if ($this->generate($location, 'Seeder', $data)) {
            return $output->success('Seeder created successfully.');
        }
    }
}
