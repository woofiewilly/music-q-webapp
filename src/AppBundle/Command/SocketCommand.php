<?php
// Change the namespace according to your bundle
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

// Ratchet libs
use Ratchet\App;
// ChatBundle instance
use AppBundle\Sockets\Chat;

class SocketCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('sockets:start-old-chat')
            // the short description shown while running "php bin/console list"
            ->setHelp("Starts the chat server")
            // the full command description shown when running the command with
            ->setDescription('Starts the chat server')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'ChatBundle socket',// A line
            '============',// Another line
            'Starting chat, open your browser.',// Empty line
        ]);

        // The domain of your app as first parameter

        // Note : if you got problems during the initialization, add as third parameter '0.0.0.0'
        // to prevent any error related to localhost :
        // $app = new \Ratchet\App('sandbox', 8080,'0.0.0.0');
        // Domain as first parameter
        $app = new App('localhost', 8081,'0.0.0.0');

        // Add route to chat with the handler as second parameter
        // The warning is OK; the object retrieved still implements the expected interface and should not
        // give any runtime error
        $app->route('/chatserv', $this->getContainer()->get('melodymunk.chat'));

        // Run !
        $app->run();
    }
}