<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Location;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\WeatherRepository;
use App\Repository\LocationRepository;

class WeatherController extends AbstractController
{
    /*
    public function cityAction(Location $location_name, WeatherRepository $weatherRepository): Response {
    $measurements = $weatherRepository->findByLocation($location_name);
    return $this->render('location.html.twig', [ 'location' => $location_name,
    'measurements' => $measurements,
    ]); }*/

    public function cityAction2($location, $country,WeatherRepository $weatherRepository, LocationRepository $locationRepository): Response
    {
        
            $location_weathers = $locationRepository->findByCity($country, $location);
            $location_name = $location_weathers[0];
            $weathers = $weatherRepository->findByLocation($location_weathers[0]);
            return $this->render('location.html.twig', [
                'location' => $location_name,
                'weathers' => $weathers,
            ]);
    
        
    }

}

