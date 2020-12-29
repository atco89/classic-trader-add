<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Add;
use App\Models\Car;
use App\Models\Contact;
use App\Models\Image;
use App\Models\Location;
use App\Modules\GuzzelClient\HttpClient;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\Twig;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class AddController
 * @package App\Http\Controllers
 */
final class AddController extends Controller
{

    /**
     * AddController constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        parent::__construct($container);
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param array $args
     * @return ResponseInterface
     * @throws GuzzleException
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $client = new HttpClient();
        $content = $client->run('https://www.classic-trader.com/api/vehicle-ad/216541');

        $data = $content->data;

        $id = isset($content->data->id) ? intval($content->data->id) : null;
        $description = isset($data->description->de_DE) ? $data->description->de_DE : null;
        $car = new Car($data->car, intval($data->yearOfProduction));
        $contact = new Contact($data->contact);
        $location = new Location($data->location);
        $standardImages = isset($data->standardImages) ? $data->standardImages : null;

        $images = [];
        foreach ($standardImages as $image) {
            $images[] = new Image($image);
        }

        $add = new Add($id, $description, $car, $contact, $location, $images);

        /** @var Twig $twig */
        $twig = $this->container->get('twig');

        return $twig->render($response, 'add.html.twig', [
            'id'          => $add->getId(),
            'description' => $add->getDescription(),
            'car'         => $add->getCar(),
            'contact'     => $add->getContact(),
            'location'    => $add->getLocation(),
            'images'      => $add->getImages(),
        ]);
    }
}