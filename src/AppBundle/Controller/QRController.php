<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Endroid\QrCode\QrCode;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class QRController extends Controller
{
    /**
     * GET this URL to receive a PNG QR code. (boy that's a lot of caps)
     *
     * @Route("/generateqr/{room_code}", name="generate_qr")
     */
    public function indexAction($room_code)
    {
        // TODO: Check that room code is valid first?

        // Get QR Code from handler function using parameter
        $qr = $this->generateQR($room_code);

        // Return the QR code (as an image maybe?)

        // Create response image
        $response = new Response($qr->writeString(), Response::HTTP_OK, array('Content-Type' => $qr->getContentType()));
        return $response;
    }

    /**
     * @param $room_code
     *
     * @Route("/viewqr/{room_code}")
     * @return Response
     */
    public function viewQR($room_code) {

        return $this->render('qr_view_test.html.twig', array(
           'room_code' => $room_code
        ));
    }

    /**
     *
     * @Route("/printqr/{room_code}", name="print_qr")
     * @param $room_code
     * @return Response
     */
    public function printQR($room_code) {

        return $this->render('qr_print.html.twig', array(
            'room_code' => $room_code
        ));
    }

    /**
     * Pass in the room code, it will generate qr code for the full web URL to the room
     *
     * @param $room_code
     * @return QrCode
     */
    public function generateQR($room_code) {
        // TODO: This should come somewhere in the config
//        $base_url = "https://localhost:8080/"; // All urls should have this base
//        $full_url = $base_url . $room_code;

        // true parameter indicates to generate absolute url
         $full_url = $this->generateUrl('room_page', array('room_code' => $room_code), UrlGeneratorInterface::ABSOLUTE_URL);

        $qrCode = new QrCode($full_url);
        $qrCode->setSize(500);

        return $qrCode;
    }
}
