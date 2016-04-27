<?php

/* base.html.twig */
class __TwigTemplate_1642fdd52fda6b629b501e7ee5d1b6521ef09eb6a4ea5809f165a23de58f0c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5364afa9a1c6e89decf8ba9806821948297a941550b44c5940d6299766d4d682 = $this->env->getExtension("native_profiler");
        $__internal_5364afa9a1c6e89decf8ba9806821948297a941550b44c5940d6299766d4d682->enter($__internal_5364afa9a1c6e89decf8ba9806821948297a941550b44c5940d6299766d4d682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5364afa9a1c6e89decf8ba9806821948297a941550b44c5940d6299766d4d682->leave($__internal_5364afa9a1c6e89decf8ba9806821948297a941550b44c5940d6299766d4d682_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a5a9f94bed3adc1b83742306ebb853288c1a12ee68671c072b7577236fe7999 = $this->env->getExtension("native_profiler");
        $__internal_2a5a9f94bed3adc1b83742306ebb853288c1a12ee68671c072b7577236fe7999->enter($__internal_2a5a9f94bed3adc1b83742306ebb853288c1a12ee68671c072b7577236fe7999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2a5a9f94bed3adc1b83742306ebb853288c1a12ee68671c072b7577236fe7999->leave($__internal_2a5a9f94bed3adc1b83742306ebb853288c1a12ee68671c072b7577236fe7999_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5bbc1121ec32a8f68b902de28a33e85dbcbb469df7943e9f901e47a6d4182e12 = $this->env->getExtension("native_profiler");
        $__internal_5bbc1121ec32a8f68b902de28a33e85dbcbb469df7943e9f901e47a6d4182e12->enter($__internal_5bbc1121ec32a8f68b902de28a33e85dbcbb469df7943e9f901e47a6d4182e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5bbc1121ec32a8f68b902de28a33e85dbcbb469df7943e9f901e47a6d4182e12->leave($__internal_5bbc1121ec32a8f68b902de28a33e85dbcbb469df7943e9f901e47a6d4182e12_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f882f1e93daf164b8ae6cef403821d70ead7bba5f3772117333099bf486ab9b5 = $this->env->getExtension("native_profiler");
        $__internal_f882f1e93daf164b8ae6cef403821d70ead7bba5f3772117333099bf486ab9b5->enter($__internal_f882f1e93daf164b8ae6cef403821d70ead7bba5f3772117333099bf486ab9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f882f1e93daf164b8ae6cef403821d70ead7bba5f3772117333099bf486ab9b5->leave($__internal_f882f1e93daf164b8ae6cef403821d70ead7bba5f3772117333099bf486ab9b5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c832de579796588ea9d6088e0240e246e2b780569544852a6d0e5a4bdd30174 = $this->env->getExtension("native_profiler");
        $__internal_0c832de579796588ea9d6088e0240e246e2b780569544852a6d0e5a4bdd30174->enter($__internal_0c832de579796588ea9d6088e0240e246e2b780569544852a6d0e5a4bdd30174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0c832de579796588ea9d6088e0240e246e2b780569544852a6d0e5a4bdd30174->leave($__internal_0c832de579796588ea9d6088e0240e246e2b780569544852a6d0e5a4bdd30174_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
