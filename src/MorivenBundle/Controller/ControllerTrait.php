<?php
namespace MorivenBundle\Controller;
use FOS\RestBundle\View\View;
use MorivenBundle\Entity\Ordre;
use MorivenBundle\MorivenBundle;
use MorivenBundle\Repository\OrdreRepository;
use MorivenBundle\Repository\UserRepository;
use MorivenBundle\Repository\VerificationRepository;
use MorivenBundle\Service\MailerService;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Response;

/**
 * Trait ControllerTrait
 * @package MorivenBundle\Controller
 */
trait ControllerTrait
{
    /**
     * @return int|null
     * @throws \LogicException
     */
    protected function getUserId()
    {
        return $this->getUser() ? $this->getUser()->getId() : null;
    }

    /**
     * @param string $data
     *
     * @return mixed
     *
     * @throws \Exception
     */
    protected function decode(string $data)
    {
        /** @var \Symfony\Component\Serializer\Serializer $serializer */
        $serializer = $this->get('serializer');
        return $serializer->decode($data, 'json');
    }
    /**
     *
     * @param mixed $message
     * @param int $status
     * @param array $headers
     *
     * @return View
     */
    protected function renderResponse($message, int $status = Response::HTTP_BAD_REQUEST, array $headers = [])
    {
        return View::create($message, $status, $headers);
    }

    /**
     * @return UserRepository
     */
    protected function getUserRepository()
    {
        return $this->get('moriven.user_repository');
    }

    /**
     * @return OrdreRepository
     */
    protected function getOrdreRepository()
    {
        return $this->get('moriven.ordre_repository');
    }

    /**
     * @return VerificationRepository
     */
    protected function getVerificationRepository()
    {
        return $this->get('moriven.verification_repository');
    }

    /**
     * @return MailerService
     */
    protected function getMailerService()
    {
        return $this->get('moriven.mailer_service');
    }

    /**
     *
     * @param Form $form
     * @return array
     */
    protected function getErrorsAsArray(Form $form)
    {
        $errors = [];
        $translator = $this->get('translator');
        // Global
        foreach ($form->getErrors() as $error) {
            $errors[$form->getName()][] = $error->getMessage();
        }
        // Fields
        foreach ($form as $child /** @var Form $child */) {
            if (!$child->isValid()) {
                foreach ($child->getErrors() as $error) {
                    $errors[$child->getName()][] = $translator->trans($error->getMessage());
                }
            }
        }
        return array_map('current', $errors);
    }

}