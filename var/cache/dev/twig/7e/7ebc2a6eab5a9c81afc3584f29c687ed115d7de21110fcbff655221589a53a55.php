<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_0440c8aba4ba94fdef24d0cbccac11a1e39be1e714712360c195095b10debf4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_044f747465f0774ec18f1158a921f47b886d463161956defbb594a0d86c799a3 = $this->env->getExtension("native_profiler");
        $__internal_044f747465f0774ec18f1158a921f47b886d463161956defbb594a0d86c799a3->enter($__internal_044f747465f0774ec18f1158a921f47b886d463161956defbb594a0d86c799a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_044f747465f0774ec18f1158a921f47b886d463161956defbb594a0d86c799a3->leave($__internal_044f747465f0774ec18f1158a921f47b886d463161956defbb594a0d86c799a3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b95e006fb7c1f86a31b5a3f8f5582bb4c0f42b63048c325d94075d963183b8b2 = $this->env->getExtension("native_profiler");
        $__internal_b95e006fb7c1f86a31b5a3f8f5582bb4c0f42b63048c325d94075d963183b8b2->enter($__internal_b95e006fb7c1f86a31b5a3f8f5582bb4c0f42b63048c325d94075d963183b8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_b95e006fb7c1f86a31b5a3f8f5582bb4c0f42b63048c325d94075d963183b8b2->leave($__internal_b95e006fb7c1f86a31b5a3f8f5582bb4c0f42b63048c325d94075d963183b8b2_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette annonce sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
