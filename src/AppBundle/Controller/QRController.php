<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Endroid\QrCode\QrCode;

class QRController extends Controller
{
    /**
     * @Route("/generateqr")
     */
    public function indexAction(Request $request)
    {
        // Get parameter sent with request

        // Get QR Code from handler function using parameter
        $qr = $this->generateQR('test');

        // Return the QR code (as an image maybe?)
        header('Content-Type: ' . $qr->getContentType());
        return $qr->writeString();

//        $response = new Response($qr->writeString(), Response::HTTP_OK, ['Content-Type' => $qr->getContentType()]);
    }

    public function generateQR($url) {
        // TODO: This should come somewhere in the config
        $base_url = "localhost:8080/";
        $full_url = $base_url . $url;

        $qrCode = new QrCode($full_url);
        $qrCode->setSize(300);

        return $qrCode;
    }
}
