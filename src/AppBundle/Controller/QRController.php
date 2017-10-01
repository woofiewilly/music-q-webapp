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
     * @Route("/generateqr", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // Get parameter sent with request

        // Get QR Code from handler function using parameter

        // Return the QR code (as an image maybe?)
    }

    public function generateQR($url) {

    }
}
