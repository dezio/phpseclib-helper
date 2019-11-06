<?php


use DeZio\phpseclibHelper\Connection;

class ConnectionTest extends \Tests\TestCase {
    public function testConnection() {
        try {
            $connection = Connection::connect('192.168.178.79', 'pph-backup', 'prepaidhoster!', '1883');
            $this->assertTrue($connection->isConnected());
        }
        catch(\Exception $ex) {
            $this->fail($ex->getMessage());
        }
    }
}
