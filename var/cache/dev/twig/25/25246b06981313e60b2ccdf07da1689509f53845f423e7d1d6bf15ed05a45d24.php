<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_6005828ae5d937591aeedc7eca0cae17a6369211af4227e30433a3a7a27f9a01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee17e3612d3bcc75d8f1c0d5b0830258f05313786c5f1de208297e25c1f89924 = $this->env->getExtension("native_profiler");
        $__internal_ee17e3612d3bcc75d8f1c0d5b0830258f05313786c5f1de208297e25c1f89924->enter($__internal_ee17e3612d3bcc75d8f1c0d5b0830258f05313786c5f1de208297e25c1f89924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee17e3612d3bcc75d8f1c0d5b0830258f05313786c5f1de208297e25c1f89924->leave($__internal_ee17e3612d3bcc75d8f1c0d5b0830258f05313786c5f1de208297e25c1f89924_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f144aa957a889bcfa95ca058e012b58714d8e7bca6b96789b7bf9cd8b85015a1 = $this->env->getExtension("native_profiler");
        $__internal_f144aa957a889bcfa95ca058e012b58714d8e7bca6b96789b7bf9cd8b85015a1->enter($__internal_f144aa957a889bcfa95ca058e012b58714d8e7bca6b96789b7bf9cd8b85015a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f144aa957a889bcfa95ca058e012b58714d8e7bca6b96789b7bf9cd8b85015a1->leave($__internal_f144aa957a889bcfa95ca058e012b58714d8e7bca6b96789b7bf9cd8b85015a1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7518c70a193ce0f0c4f45f82c4c3e441a7e597d0d9bce76e3fc651eb015429a8 = $this->env->getExtension("native_profiler");
        $__internal_7518c70a193ce0f0c4f45f82c4c3e441a7e597d0d9bce76e3fc651eb015429a8->enter($__internal_7518c70a193ce0f0c4f45f82c4c3e441a7e597d0d9bce76e3fc651eb015429a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_7518c70a193ce0f0c4f45f82c4c3e441a7e597d0d9bce76e3fc651eb015429a8->leave($__internal_7518c70a193ce0f0c4f45f82c4c3e441a7e597d0d9bce76e3fc651eb015429a8_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_96b0f33858b245ce0ac8c016ed0f4d35b5ab3e6916b37dbd05b31faf098d02ce = $this->env->getExtension("native_profiler");
        $__internal_96b0f33858b245ce0ac8c016ed0f4d35b5ab3e6916b37dbd05b31faf098d02ce->enter($__internal_96b0f33858b245ce0ac8c016ed0f4d35b5ab3e6916b37dbd05b31faf098d02ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_96b0f33858b245ce0ac8c016ed0f4d35b5ab3e6916b37dbd05b31faf098d02ce->leave($__internal_96b0f33858b245ce0ac8c016ed0f4d35b5ab3e6916b37dbd05b31faf098d02ce_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
