<?php

/* @Twig/Exception/exception.html.twig */
class __TwigTemplate_f176dcfaa9fa3a6675ba4be625eb50d5ef1eab96dd71ce2b7b3d1a9d6da70bf2 extends Twig_Template
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
        $__internal_a4225045520ba0ad80f05fd571f9aab03b8bd1bee838548599f183fea27272a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4225045520ba0ad80f05fd571f9aab03b8bd1bee838548599f183fea27272a4->enter($__internal_a4225045520ba0ad80f05fd571f9aab03b8bd1bee838548599f183fea27272a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        // line 1
        echo "<div class=\"exception-summary\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 5, $this->getSourceContext()); })()), "allPrevious", array())));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["previousException"]) {
            // line 6
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), $context["previousException"], "class", array()));
            echo "
                    <span class=\"icon\">";
            // line 7
            echo twig_include($this->env, $context, "@Twig/images/chevron-right.svg");
            echo "</span>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['previousException'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 9, $this->getSourceContext()); })()), "class", array()));
        echo "
            </h2>
            <h2 class=\"exception-http\">
                HTTP ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "</small>
            </h2>
        </div>
    </div>
    ";
        // line 16
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 16, $this->getSourceContext()); })()), "message", array()))) {
            // line 17
            echo "    <div class=\"container\">
        <div class=\"exception-message-wrapper\">
            <h1 class=\"break-long-words exception-message ";
            // line 19
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 19, $this->getSourceContext()); })()), "message", array())) > 180)) ? ("long") : (""));
            echo "\">";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 20, $this->getSourceContext()); })()), "message", array()), "html", null, true)));
            // line 21
            echo "</h1>

            <div class=\"exception-illustration hidden-xs-down\">
                ";
            // line 24
            echo twig_include($this->env, $context, "@Twig/images/symfony-ghost.svg");
            echo "
            </div>
        </div>
    </div>
    ";
        }
        // line 29
        echo "</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            ";
        // line 34
        $context["exception_as_array"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 34, $this->getSourceContext()); })()), "toarray", array());
        // line 35
        echo "            ";
        $context["_exceptions_with_user_code"] = array();
        // line 36
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 36, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 37
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "trace", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 38
                echo "                    ";
                if (((( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array())) && !twig_in_filter("/vendor/", twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array()))) && !twig_in_filter("/var/cache/", twig_get_attribute($this->env, $this->getSourceContext(), $context["trace"], "file", array()))) &&  !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array()))) {
                    // line 39
                    echo "                        ";
                    $context["_exceptions_with_user_code"] = twig_array_merge((isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new Twig_Error_Runtime('Variable "_exceptions_with_user_code" does not exist.', 39, $this->getSourceContext()); })()), array(0 => $context["i"]));
                    // line 40
                    echo "                    ";
                }
                // line 41
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            <h3 class=\"tab-title\">
                ";
        // line 44
        if ((twig_length_filter($this->env, (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 44, $this->getSourceContext()); })())) > 1)) {
            // line 45
            echo "                    Exceptions <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 45, $this->getSourceContext()); })())), "html", null, true);
            echo "</span>
                ";
        } else {
            // line 47
            echo "                    Exception
                ";
        }
        // line 49
        echo "            </h3>

            <div class=\"tab-content\">
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 52, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 53
            echo "                    ";
            echo twig_include($this->env, $context, "@Twig/Exception/traces.html.twig", array("exception" => $context["e"], "index" => twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "expand" => (twig_in_filter($context["i"], (isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new Twig_Error_Runtime('Variable "_exceptions_with_user_code" does not exist.', 53, $this->getSourceContext()); })())) || (twig_test_empty((isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new Twig_Error_Runtime('Variable "_exceptions_with_user_code" does not exist.', 53, $this->getSourceContext()); })())) && twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())))), false);
            echo "
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 58
        echo ((twig_test_empty((isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new Twig_Error_Runtime('Variable "logger" does not exist.', 58, $this->getSourceContext()); })()))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">
                Logs
                ";
        // line 61
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["logger"] ?? null), "counterrors", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["logger"] ?? null), "counterrors", array())))) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["logger"] ?? null), "counterrors", array())) : (false))) {
            echo "<span class=\"badge status-error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new Twig_Error_Runtime('Variable "logger" does not exist.', 61, $this->getSourceContext()); })()), "counterrors", array()), "html", null, true);
            echo "</span>";
        }
        // line 62
        echo "            </h3>

            <div class=\"tab-content\">
                ";
        // line 65
        if ((isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new Twig_Error_Runtime('Variable "logger" does not exist.', 65, $this->getSourceContext()); })())) {
            // line 66
            echo "                    ";
            echo twig_include($this->env, $context, "@Twig/Exception/logs.html.twig", array("logs" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new Twig_Error_Runtime('Variable "logger" does not exist.', 66, $this->getSourceContext()); })()), "logs", array())), false);
            echo "
                ";
        } else {
            // line 68
            echo "                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>
                ";
        }
        // line 72
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">
                ";
        // line 77
        if ((twig_length_filter($this->env, (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 77, $this->getSourceContext()); })())) > 1)) {
            // line 78
            echo "                    Stack Traces <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 78, $this->getSourceContext()); })())), "html", null, true);
            echo "</span>
                ";
        } else {
            // line 80
            echo "                    Stack Trace
                ";
        }
        // line 82
        echo "            </h3>

            <div class=\"tab-content\">
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new Twig_Error_Runtime('Variable "exception_as_array" does not exist.', 85, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 86
            echo "                    ";
            echo twig_include($this->env, $context, "@Twig/Exception/traces_text.html.twig", array("exception" => $context["e"], "index" => twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "num_exceptions" => twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "length", array())), false);
            echo "
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            </div>
        </div>

        ";
        // line 91
        if ( !twig_test_empty((isset($context["currentContent"]) || array_key_exists("currentContent", $context) ? $context["currentContent"] : (function () { throw new Twig_Error_Runtime('Variable "currentContent" does not exist.', 91, $this->getSourceContext()); })()))) {
            // line 92
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                ";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["currentContent"]) || array_key_exists("currentContent", $context) ? $context["currentContent"] : (function () { throw new Twig_Error_Runtime('Variable "currentContent" does not exist.', 96, $this->getSourceContext()); })()), "html", null, true);
            echo "
            </div>
        </div>
        ";
        }
        // line 100
        echo "    </div>
</div>
";
        
        $__internal_a4225045520ba0ad80f05fd571f9aab03b8bd1bee838548599f183fea27272a4->leave($__internal_a4225045520ba0ad80f05fd571f9aab03b8bd1bee838548599f183fea27272a4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 100,  331 => 96,  325 => 92,  323 => 91,  318 => 88,  301 => 86,  284 => 85,  279 => 82,  275 => 80,  269 => 78,  267 => 77,  260 => 72,  254 => 68,  248 => 66,  246 => 65,  241 => 62,  235 => 61,  229 => 58,  224 => 55,  207 => 53,  190 => 52,  185 => 49,  181 => 47,  175 => 45,  173 => 44,  170 => 43,  164 => 42,  150 => 41,  147 => 40,  144 => 39,  141 => 38,  123 => 37,  118 => 36,  115 => 35,  113 => 34,  106 => 29,  98 => 24,  93 => 21,  91 => 20,  88 => 19,  84 => 17,  82 => 16,  73 => 12,  66 => 9,  50 => 7,  45 => 6,  28 => 5,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"exception-summary\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                {% for previousException in exception.allPrevious|reverse %}
                    {{ previousException.class|abbr_class }}
                    <span class=\"icon\">{{ include('@Twig/images/chevron-right.svg') }}</span>
                {% endfor %}
                {{ exception.class|abbr_class }}
            </h2>
            <h2 class=\"exception-http\">
                HTTP {{ status_code }} <small>{{ status_text }}</small>
            </h2>
        </div>
    </div>
    {% if exception.message is not empty %}
    <div class=\"container\">
        <div class=\"exception-message-wrapper\">
            <h1 class=\"break-long-words exception-message {{ exception.message|length > 180 ? 'long' }}\">
                {{- exception.message|nl2br|format_file_from_text -}}
            </h1>

            <div class=\"exception-illustration hidden-xs-down\">
                {{ include('@Twig/images/symfony-ghost.svg') }}
            </div>
        </div>
    </div>
    {% endif %}
</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            {% set exception_as_array = exception.toarray %}
            {% set _exceptions_with_user_code = [] %}
            {% for i, e in exception_as_array %}
                {% for trace in e.trace %}
                    {% if (trace.file is not empty) and ('/vendor/' not in trace.file) and ('/var/cache/' not in trace.file) and not loop.last %}
                        {% set _exceptions_with_user_code = _exceptions_with_user_code|merge([i]) %}
                    {% endif %}
                {% endfor %}
            {% endfor %}
            <h3 class=\"tab-title\">
                {% if exception_as_array|length > 1 %}
                    Exceptions <span class=\"badge\">{{ exception_as_array|length }}</span>
                {% else %}
                    Exception
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% for i, e in exception_as_array %}
                    {{ include('@Twig/Exception/traces.html.twig', { exception: e, index: loop.index, expand: i in _exceptions_with_user_code or (_exceptions_with_user_code is empty and loop.first) }, with_context = false) }}
                {% endfor %}
            </div>
        </div>

        <div class=\"tab {{ logger is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">
                Logs
                {% if logger.counterrors ?? false %}<span class=\"badge status-error\">{{ logger.counterrors }}</span>{% endif %}
            </h3>

            <div class=\"tab-content\">
                {% if logger %}
                    {{ include('@Twig/Exception/logs.html.twig', { logs: logger.logs }, with_context = false)  }}
                {% else %}
                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">
                {% if exception_as_array|length > 1 %}
                    Stack Traces <span class=\"badge\">{{ exception_as_array|length }}</span>
                {% else %}
                    Stack Trace
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% for e in exception_as_array %}
                    {{ include('@Twig/Exception/traces_text.html.twig', { exception: e, index: loop.index, num_exceptions: loop.length }, with_context = false) }}
                {% endfor %}
            </div>
        </div>

        {% if currentContent is not empty %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                {{ currentContent }}
            </div>
        </div>
        {% endif %}
    </div>
</div>
", "@Twig/Exception/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.html.twig");
    }
}
