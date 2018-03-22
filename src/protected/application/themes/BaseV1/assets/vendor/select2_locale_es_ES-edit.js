/**
 * Select2 Spanish translation - EDITED to MapasCulturais
 */
(function ($) {
    "use strict";

    $.extend($.fn.select2.defaults, {
        formatNoMatches: function () { return "No se ha encontrado ningún resultado"; },
        formatInputTooShort: function (input, min) { var n = min - input.length; return "Informe al menos " + n + " caracter" + (n == 1? "" : "es"); },
        formatInputTooLong: function (input, max) { var n = input.length - max; return "Borre " + n + " caracter" + (n == 1? "" : "es"); },
        formatSelectionTooBig: function (limit) { return "Solo es posible seleccionar " + limit + " elemento" + (limit == 1 ? "" : "s"); },
        formatLoadMore: function (pageNumber) { return "Cargando más resultados..."; },
        formatSearching: function () { return "Buscando..."; }
    });
})(jQuery);
