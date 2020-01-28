<?php

/* @moriven/config/services.yml */
class __TwigTemplate_da3c25e6608e8951520089343447354b218cda0decd760a68ead3421241ef243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c80ed72612166bc15487729a6ddcf5c0a964f3a23e9e1f67a6b491f7ba496848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80ed72612166bc15487729a6ddcf5c0a964f3a23e9e1f67a6b491f7ba496848->enter($__internal_c80ed72612166bc15487729a6ddcf5c0a964f3a23e9e1f67a6b491f7ba496848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/config/services.yml"));

        $__internal_4b1f11f8dc1de9f442a2cee8651f1b07bdf01a0907637cdc70dbf5bfab956b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1f11f8dc1de9f442a2cee8651f1b07bdf01a0907637cdc70dbf5bfab956b7b->enter($__internal_4b1f11f8dc1de9f442a2cee8651f1b07bdf01a0907637cdc70dbf5bfab956b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@moriven/config/services.yml"));

        // line 1
        echo "services:
    moriven.repository:
        abstract: true
        factory: ['@doctrine.orm.entity_manager', getRepository]
        calls:
            - [setLogger, ['@?logger']]

    moriven.ordre_repository:
        class: MorivenBundle\\Repository\\OrdreRepository
        parent: moriven.repository
        arguments: ['MorivenBundle:Ordre']

    moriven.user_repository:
        class: MorivenBundle\\Repository\\UserRepository
        parent: moriven.repository
        arguments: ['MorivenBundle:User']

    moriven.verification_repository:
        class: MorivenBundle\\Repository\\VerificationRepository
        parent: moriven.repository
        parent: moriven.repository
        arguments: ['MorivenBundle:Verification']

    moriven.mailer_service:
        class: MorivenBundle\\Service\\MailerService
        arguments:
            - '@templating'
            - '@mailer'";
        
        $__internal_c80ed72612166bc15487729a6ddcf5c0a964f3a23e9e1f67a6b491f7ba496848->leave($__internal_c80ed72612166bc15487729a6ddcf5c0a964f3a23e9e1f67a6b491f7ba496848_prof);

        
        $__internal_4b1f11f8dc1de9f442a2cee8651f1b07bdf01a0907637cdc70dbf5bfab956b7b->leave($__internal_4b1f11f8dc1de9f442a2cee8651f1b07bdf01a0907637cdc70dbf5bfab956b7b_prof);

    }

    public function getTemplateName()
    {
        return "@moriven/config/services.yml";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("services:
    moriven.repository:
        abstract: true
        factory: ['@doctrine.orm.entity_manager', getRepository]
        calls:
            - [setLogger, ['@?logger']]

    moriven.ordre_repository:
        class: MorivenBundle\\Repository\\OrdreRepository
        parent: moriven.repository
        arguments: ['MorivenBundle:Ordre']

    moriven.user_repository:
        class: MorivenBundle\\Repository\\UserRepository
        parent: moriven.repository
        arguments: ['MorivenBundle:User']

    moriven.verification_repository:
        class: MorivenBundle\\Repository\\VerificationRepository
        parent: moriven.repository
        parent: moriven.repository
        arguments: ['MorivenBundle:Verification']

    moriven.mailer_service:
        class: MorivenBundle\\Service\\MailerService
        arguments:
            - '@templating'
            - '@mailer'", "@moriven/config/services.yml", "/Users/hakim/Sites/tunisie-express/src/MorivenBundle/Resources/config/services.yml");
    }
}
