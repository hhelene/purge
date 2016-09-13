<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_af95fad4506e25e86ef98e26517c0875d49c8260782da9aa87c9849f67dd361c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e9bf8fea9ee5052e289eb68abd39799214caffd5019f701caee0b89c64483e4 = $this->env->getExtension("native_profiler");
        $__internal_0e9bf8fea9ee5052e289eb68abd39799214caffd5019f701caee0b89c64483e4->enter($__internal_0e9bf8fea9ee5052e289eb68abd39799214caffd5019f701caee0b89c64483e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e9bf8fea9ee5052e289eb68abd39799214caffd5019f701caee0b89c64483e4->leave($__internal_0e9bf8fea9ee5052e289eb68abd39799214caffd5019f701caee0b89c64483e4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9cf426dec6aa6a5f261cee6c7c232a75ed641c0413bbe2577b67b329cec39df8 = $this->env->getExtension("native_profiler");
        $__internal_9cf426dec6aa6a5f261cee6c7c232a75ed641c0413bbe2577b67b329cec39df8->enter($__internal_9cf426dec6aa6a5f261cee6c7c232a75ed641c0413bbe2577b67b329cec39df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9cf426dec6aa6a5f261cee6c7c232a75ed641c0413bbe2577b67b329cec39df8->leave($__internal_9cf426dec6aa6a5f261cee6c7c232a75ed641c0413bbe2577b67b329cec39df8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb8b42810ec33761477778cf4fc1756ef12603335e2b191684bdc6db687ac044 = $this->env->getExtension("native_profiler");
        $__internal_eb8b42810ec33761477778cf4fc1756ef12603335e2b191684bdc6db687ac044->enter($__internal_eb8b42810ec33761477778cf4fc1756ef12603335e2b191684bdc6db687ac044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eb8b42810ec33761477778cf4fc1756ef12603335e2b191684bdc6db687ac044->leave($__internal_eb8b42810ec33761477778cf4fc1756ef12603335e2b191684bdc6db687ac044_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_86c9c13d748ff6f8f2d22dbf9d83fb3ebf6552d4a06f69fa0538a504f40193ce = $this->env->getExtension("native_profiler");
        $__internal_86c9c13d748ff6f8f2d22dbf9d83fb3ebf6552d4a06f69fa0538a504f40193ce->enter($__internal_86c9c13d748ff6f8f2d22dbf9d83fb3ebf6552d4a06f69fa0538a504f40193ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_86c9c13d748ff6f8f2d22dbf9d83fb3ebf6552d4a06f69fa0538a504f40193ce->leave($__internal_86c9c13d748ff6f8f2d22dbf9d83fb3ebf6552d4a06f69fa0538a504f40193ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
