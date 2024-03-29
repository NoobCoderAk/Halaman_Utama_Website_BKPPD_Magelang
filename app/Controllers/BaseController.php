<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;


// used Models
use App\Models\CarouselModel;
use App\Models\EgovModel;
use App\Models\GaleriModel;
use App\Models\PengumumanModel;
use App\Models\ArtikelModel;
use App\Models\AgendaModel;
use App\Models\JadwalModel;
use App\Models\MapsModel;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.


        // $this->session = \Config\Services::session();
        $this->CarouselModel = new CarouselModel();
        $this->EgovModel = new EgovModel();
        $this->GaleriModel = new GaleriModel();
        $this->PengumumanModel = new PengumumanModel();
        $this->ArtikelModel = new ArtikelModel();
        $this->AgendaModel = new AgendaModel();
        $this->JadwalModel = new JadwalModel();
        $this->MapsModel = new MapsModel();
    }
}
