<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class Truncate extends BaseCommand
{
    protected $group       = 'demo';
    protected $name        = 'truncate';
    protected $description = 'Displays basic application information.';
    protected $table = '';
    public function run(array $params)
    {
        if (isset($params[0])) {
            $this->table = $params[0];
        }

        $db = \Config\Database::connect();

        $db->query("TRUNCATE " . $this->table);

        CLI::write(' table truncate ' . $this->table);
    }
}
