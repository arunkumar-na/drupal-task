<?php
interface Logger
{
    public function log($message, $date);    
}

class DemoLogger implements Logger
{
    public function log($message, $date)
    {
        echo "<strong>Logged message:</strong> $message at <strong>$date</strong>"; 
    }
}

trait Loggable // implements Logger
{
    protected $logger;
    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }
    public function log($message, $date)
    {
        $this->logger->log($message, $date);
    }
}

class Load implements Logger
{
    use Loggable;
}
?>