<?php

class Database
{
    public $connection;

    // public function __construct($config)
    public function __construct()
    {

        // var_dump(phpinfo());
        $dsn = parse_url(getenv('DATABASE_URL'));


        // var_dump($dsn);

        $this->connection = new PDO(
            'pgsql:' . sprintf(
                'host=%s;port=%s;user=%s;password=%s;dbname=%s',
                $dsn['host'],
                $dsn['port'],
                $dsn['user'],
                $dsn['pass'],
                ltrim($dsn['path'], '/')
            )
        );
        // $dsn = 'mysql:' . http_build_query($config, '', ';');

        // $this->connection = new PDO($dsn, $config['user'], $config['pass'], [
        //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        // ]);
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}