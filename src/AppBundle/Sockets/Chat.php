<?php
// Change the namespace according to your bundle, and that's all !
namespace AppBundle\Sockets;

use AppBundle\Entity\Message;
use Doctrine\ORM\EntityManager;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

/**
 * Class Chat
 *
 * Much of the chat functionality was inspired from
 * https://ourcodeworld.com/articles/read/242/creating-an-agnostic-realtime-chat-with-php-using-sockets-in-symfony-93
 *
 * @package AppBundle\Sockets
 */
class Chat implements MessageComponentInterface {
    protected $clients;
    protected $em;

    public function __construct(EntityManager $em) {
        $this->clients = new \SplObjectStorage;
        $this->em = $em;
    }

    public function onOpen(ConnectionInterface $conn) {
        // Store the new connection to send messages to later
        $this->clients->attach($conn);

        echo "New connection! ({conn->resourceId})\n";
    }

    /**
     * @param ConnectionInterface $from
     * @param string $msg
     */
    public function onMessage(ConnectionInterface $from, $msg) {
        $numRecv = count($this->clients) - 1;
        echo sprintf('Connection  sending message "%s" to %d other connection%s' . "\n"
            ,  $msg, $numRecv, $numRecv == 1 ? '' : 's');

        // Add message into database
        $json = json_decode($msg, true);
        $new_message = new Message($json['username'], $json['message']);

//        $em = $this->getDoctrine()->getManager();
        $this->em->persist($new_message);
        $this->em->flush();


        foreach ($this->clients as $client) {
            if ($from !== $client) {
                // The sender is not the receiver, send to each client connected
                $client->send($msg);
            }
        }
    }

    public function onClose(ConnectionInterface $conn) {
        // The connection is closed, remove it, as we can no longer send it messages
        $this->clients->detach($conn);

        echo "Connection {conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";

        $conn->close();
    }
}