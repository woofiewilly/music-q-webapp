<?php
// Change the namespace according to your bundle
namespace Chat\ChatBundle\Command;

use Chat\ChatBundle\BasicMultiRoomServer;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class WebChatCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('sockets:start-chat')
            // the short description shown while running "php bin/console list"
            ->setHelp("Starts the improved chat server")
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

        $port = 8081;
        $server = new BasicMultiRoomServer();

        BasicMultiRoomServer::run($server, $port);
    }
}