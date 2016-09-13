<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_28386922de4c8c05606c402fd78d8bf0870e973b8cb991fd15cf9ad7db843b6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d1a129cf606d69303cb641ca0ed44ef0ac3d8fc54b49c82f603f393d083292a = $this->env->getExtension("native_profiler");
        $__internal_8d1a129cf606d69303cb641ca0ed44ef0ac3d8fc54b49c82f603f393d083292a->enter($__internal_8d1a129cf606d69303cb641ca0ed44ef0ac3d8fc54b49c82f603f393d083292a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d1a129cf606d69303cb641ca0ed44ef0ac3d8fc54b49c82f603f393d083292a->leave($__internal_8d1a129cf606d69303cb641ca0ed44ef0ac3d8fc54b49c82f603f393d083292a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c07f96b69487f423af165afa46eac67226feb0273ea8ecb4c1e1ab375e2bc9e = $this->env->getExtension("native_profiler");
        $__internal_8c07f96b69487f423af165afa46eac67226feb0273ea8ecb4c1e1ab375e2bc9e->enter($__internal_8c07f96b69487f423af165afa46eac67226feb0273ea8ecb4c1e1ab375e2bc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8c07f96b69487f423af165afa46eac67226feb0273ea8ecb4c1e1ab375e2bc9e->leave($__internal_8c07f96b69487f423af165afa46eac67226feb0273ea8ecb4c1e1ab375e2bc9e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0472e110e274582538cb5b7297abafd2fea8cc142f4d97e94cdc0d7d6bbafdc = $this->env->getExtension("native_profiler");
        $__internal_a0472e110e274582538cb5b7297abafd2fea8cc142f4d97e94cdc0d7d6bbafdc->enter($__internal_a0472e110e274582538cb5b7297abafd2fea8cc142f4d97e94cdc0d7d6bbafdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a0472e110e274582538cb5b7297abafd2fea8cc142f4d97e94cdc0d7d6bbafdc->leave($__internal_a0472e110e274582538cb5b7297abafd2fea8cc142f4d97e94cdc0d7d6bbafdc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea57d579d7ceef29bc1fdbec0e41d2b98a071cc726deac99a79b47df8a52ea93 = $this->env->getExtension("native_profiler");
        $__internal_ea57d579d7ceef29bc1fdbec0e41d2b98a071cc726deac99a79b47df8a52ea93->enter($__internal_ea57d579d7ceef29bc1fdbec0e41d2b98a071cc726deac99a79b47df8a52ea93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ea57d579d7ceef29bc1fdbec0e41d2b98a071cc726deac99a79b47df8a52ea93->leave($__internal_ea57d579d7ceef29bc1fdbec0e41d2b98a071cc726deac99a79b47df8a52ea93_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
