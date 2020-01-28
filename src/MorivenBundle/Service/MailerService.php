<?php

namespace MorivenBundle\Service;

use Swift_Mailer;
use Swift_Message;
use MorivenBundle\Entity\Contact;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Templating\EngineInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

/**
 * Class MailerService
 * @package ContentPepper\SiteBundle\Helper
 */
class MailerService
{
    /** @var \Symfony\Component\Templating\EngineInterface */
    private $template;

    /** @var \Swift_Mailer */
    private $mailer;

    /** @var string */
    private $from;

    /** @var string */
    private $to;

    /**
     * @param EngineInterface $template
     * @param Swift_Mailer $mailer
     */
    public function __construct(EngineInterface $template, Swift_Mailer $mailer)
    {
        $this->template = $template;
        $this->mailer = $mailer;
    }

    /**
     * @param $to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * @param $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }


    /**
     * @use Contact page.
     *
     * @param Contact $contactInfo
     *
     * @return int
     * @throws \RuntimeException
     */
    public function contactUs(Contact $contactInfo)
    {
        $serializer = new Serializer([new GetSetMethodNormalizer()], [new JsonEncoder()]);
        $message = Swift_Message::newInstance();
        $message->setFrom($contactInfo->getEmail())
            ->setTo($this->to)
            ->setContentType('text/html')
            ->setBody($this->template->render('MorivenBundle:feedback:contact.txt.twig', [
                'contactInfo' => json_decode($serializer->serialize($contactInfo, 'json'), true)
            ]));

        return $this->mailer->send($message);
    }
}
