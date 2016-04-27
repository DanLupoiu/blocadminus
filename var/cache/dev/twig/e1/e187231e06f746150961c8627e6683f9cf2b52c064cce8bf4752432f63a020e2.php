<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dff1d0c016f5ce9978a02631c8b83ff7daa4d067200c2ec527b669a0e66e2876 extends Twig_Template
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
        $__internal_e663ba37fb82a52983df078c0a372c81951f381ba4af461edc0dd4fa197c2313 = $this->env->getExtension("native_profiler");
        $__internal_e663ba37fb82a52983df078c0a372c81951f381ba4af461edc0dd4fa197c2313->enter($__internal_e663ba37fb82a52983df078c0a372c81951f381ba4af461edc0dd4fa197c2313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e663ba37fb82a52983df078c0a372c81951f381ba4af461edc0dd4fa197c2313->leave($__internal_e663ba37fb82a52983df078c0a372c81951f381ba4af461edc0dd4fa197c2313_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_65dd8e9da3b6e38daee6d2ea4b011469ab83a14f4cd1888ecff474aca98f068b = $this->env->getExtension("native_profiler");
        $__internal_65dd8e9da3b6e38daee6d2ea4b011469ab83a14f4cd1888ecff474aca98f068b->enter($__internal_65dd8e9da3b6e38daee6d2ea4b011469ab83a14f4cd1888ecff474aca98f068b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_65dd8e9da3b6e38daee6d2ea4b011469ab83a14f4cd1888ecff474aca98f068b->leave($__internal_65dd8e9da3b6e38daee6d2ea4b011469ab83a14f4cd1888ecff474aca98f068b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0c33b07fe6229f4f89749093ca55e20b2c10fe9ed36485f16bdf6fb2bc8de68 = $this->env->getExtension("native_profiler");
        $__internal_e0c33b07fe6229f4f89749093ca55e20b2c10fe9ed36485f16bdf6fb2bc8de68->enter($__internal_e0c33b07fe6229f4f89749093ca55e20b2c10fe9ed36485f16bdf6fb2bc8de68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e0c33b07fe6229f4f89749093ca55e20b2c10fe9ed36485f16bdf6fb2bc8de68->leave($__internal_e0c33b07fe6229f4f89749093ca55e20b2c10fe9ed36485f16bdf6fb2bc8de68_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c625866e314a9e0ca64784827fcaf5fe82a9106c8b982733325057b9a46e568 = $this->env->getExtension("native_profiler");
        $__internal_1c625866e314a9e0ca64784827fcaf5fe82a9106c8b982733325057b9a46e568->enter($__internal_1c625866e314a9e0ca64784827fcaf5fe82a9106c8b982733325057b9a46e568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1c625866e314a9e0ca64784827fcaf5fe82a9106c8b982733325057b9a46e568->leave($__internal_1c625866e314a9e0ca64784827fcaf5fe82a9106c8b982733325057b9a46e568_prof);

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
