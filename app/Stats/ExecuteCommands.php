<?php

namespace App\Stats;

use Illuminate\Support\Facades\Process;

trait ExecuteCommands
{
    /**
     * Execute a command.
     *
     * @param  string $command
     * @return string
     */
    public function executeCommand($command)
    {
        return trim(Process::run($command)->output());
    }
}
