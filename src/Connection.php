<?php


namespace DeZio\phpseclibHelper;


class Connection {
    /** @var \phpseclib\Net\SSH2 */
    private $ssh;

    /**
     * Connection constructor.
     * @param \phpseclib\Net\SSH2 $ssh
     */
    public function __construct(\phpseclib\Net\SSH2 $ssh) { $this->ssh = $ssh; }

    /**
     * @param $ip
     * @param $password
     * @param string $username
     * @param int $port
     * @return Connection
     * @throws Exceptions\SshException
     */
    public static function connect($ip, $password, $username = "root", $port = 22) {
        $ssh = new \phpseclib\Net\SSH2($ip, $port);
        if(!$ssh->login($username, $password)) {
            throw new \DeZio\phpseclibHelper\Exceptions\SshException($ssh->getLastError());
        }
        return new self($ssh);
    }
    
    
    public function execute(string $command): CommandResult {
        $command = trim($command);
        $result = new CommandResult($command);
        $output = $this->ssh->exec($command);
        $result->setOutput($output)->setExitCode($this->ssh->exit_status);
        return $result;
    }
}
