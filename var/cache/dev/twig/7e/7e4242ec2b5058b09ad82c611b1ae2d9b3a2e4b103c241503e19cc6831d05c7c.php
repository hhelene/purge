<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_aae0cb978bc5a6296d0edea6e691b5880b7c1119f4d89f0e638d4b741491a246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d332ced2bc225786bda5e3b4e53f23b6adcec68e08d7fdaa1cc5b437eb7120ea = $this->env->getExtension("native_profiler");
        $__internal_d332ced2bc225786bda5e3b4e53f23b6adcec68e08d7fdaa1cc5b437eb7120ea->enter($__internal_d332ced2bc225786bda5e3b4e53f23b6adcec68e08d7fdaa1cc5b437eb7120ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d332ced2bc225786bda5e3b4e53f23b6adcec68e08d7fdaa1cc5b437eb7120ea->leave($__internal_d332ced2bc225786bda5e3b4e53f23b6adcec68e08d7fdaa1cc5b437eb7120ea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_778caf573042fc34ba04dcbb2faa907d7d75ddb588f4215eb8574e1b763831c1 = $this->env->getExtension("native_profiler");
        $__internal_778caf573042fc34ba04dcbb2faa907d7d75ddb588f4215eb8574e1b763831c1->enter($__internal_778caf573042fc34ba04dcbb2faa907d7d75ddb588f4215eb8574e1b763831c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_778caf573042fc34ba04dcbb2faa907d7d75ddb588f4215eb8574e1b763831c1->leave($__internal_778caf573042fc34ba04dcbb2faa907d7d75ddb588f4215eb8574e1b763831c1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c1c9e231bae03f538c2acc7de57612bb45ceeba9747ba64ee625aaa5790b5ed = $this->env->getExtension("native_profiler");
        $__internal_7c1c9e231bae03f538c2acc7de57612bb45ceeba9747ba64ee625aaa5790b5ed->enter($__internal_7c1c9e231bae03f538c2acc7de57612bb45ceeba9747ba64ee625aaa5790b5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7c1c9e231bae03f538c2acc7de57612bb45ceeba9747ba64ee625aaa5790b5ed->leave($__internal_7c1c9e231bae03f538c2acc7de57612bb45ceeba9747ba64ee625aaa5790b5ed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
