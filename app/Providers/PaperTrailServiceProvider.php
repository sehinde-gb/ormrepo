<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Monolog\Logger;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\SyslogUdpHandler;

class PaperTrailServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Set the format
        $output = "%channel%.%level_name%: %message%";
        $formatter = new LineFormatter($output);

        // Setup the logger
        $logger = new Logger('my_logger');
        $syslogHandler = new SyslogUdpHandler("logs4.papertrailapp.com", 15391);
        $syslogHandler->setFormatter($formatter);
        $logger->pushHandler($syslogHandler);

        // Use the new logger
        $logger->addInfo('Monolog test');
    }
}
