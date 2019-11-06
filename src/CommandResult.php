<?php


namespace DeZio\phpseclibHelper;


class CommandResult {
    private $command;
    private $exitCode;
    private $output;

    /**
     * CommandResult constructor.
     * @param $command
     */
    public function __construct($command) { $this->command = $command; }

    /**
     * @return mixed
     */
    public function getCommand() {
        return $this->command;
    }

    /**
     * @param mixed $command
     * @return CommandResult
     */
    public function setCommand($command) {
        $this->command = $command;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExitCode() {
        return $this->exitCode;
    }

    /**
     * @param mixed $exitCode
     * @return CommandResult
     */
    public function setExitCode($exitCode) {
        $this->exitCode = $exitCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOutput() {
        return $this->output;
    }

    /**
     * @param mixed $output
     * @return CommandResult
     */
    public function setOutput($output) {
        $this->output = $output;
        return $this;
    }
}
