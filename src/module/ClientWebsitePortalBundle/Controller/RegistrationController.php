<?php 
namespace module\ClientWebsitePortalBundle\Controller;

use module\ClientWebsitePortalBundle\Form\UserType;
use module\ClientWebsitePortalBundle\Entity\User;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends Controller
{

    public function registerAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            /*$password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());*/

            var_dump($form);
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('replace_with_some_route');
        }

        return $this->render('Registration/register.html.twig',
                                array(
                                    'form' => $form->createView(),
                                    'page_title' => 'Registration page'
                                )
        );
    }
}