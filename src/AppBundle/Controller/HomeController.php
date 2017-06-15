<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\VarDumper\VarDumper;

class HomeController extends Controller
{
    public function helloAction(Request $request, $name, $age)
    {
        $users = array(
            'mohamed',
            'meriem',
            'Soilah',
            'John'
        );

        $john = $request->get('person');

        $session = $request->getSession();

        VarDumper::dump($john);
        VarDumper::dump($session);

        return $this->render('AppBundle:Home:hello.html.twig',
            array(
                'user' => $name,
                'age' => $age,
                'users' => $users
            )
        );
    }

    public function indexAction()
    {
        return $this->render('AppBundle:Home:index.html.twig', array(
            // ...
        ));
    }

    public function productAction()
    {
        return $this->render('AppBundle:Home:product.html.twig', array(
            // ...
        ));
    }
}
