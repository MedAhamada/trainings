--- Generer un controlleur

# php app/console generate:controller

Récupérer l'entity manager:

$em= $this->getDoctrine()->getManager();

Sauvegarde dans la base de donnés:

$em->persist($product);
$em->flush();

Recuperer un objet de la base de donnee

$product = $em->getRepository('AppBundle:Product')->find($id);

$products = $em->getRepository('AppBundle:Product')->findAll();

Pour modifier
 $product->setName("BMW");
 $em->flush();