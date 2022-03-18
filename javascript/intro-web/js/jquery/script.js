/*$("h1").html("<b>Indice argomenti</b>");

$("h1").hide(555);
$("h1").show(555);

$("ul:eq(1) li:first").click(
    function() {
        $("h1").toggle(222);
    }
);

$("ul:eq(2) li:last").click(
    function() {
        $("h1").text("Un esempio pratico");
    }
);*/

$("#trasforma").click(
    function() {
        $("#contenitore").addClass("contenitoreNuovo");
        $("h1").text("Indice delle lezioni").css({"color":"#ccc", "margin":"16px", "font-size":"60px"});
        $("p").removeClass("capitolo").addClass("capitoloNuovo");
    }
)

nuovoTesto = $("<li>Ambienti di sviluppo</li>");
$("ul:first").append(nuovoTesto);
nuovoTesto.addClass("paragrafo");

$("#maiuscolo").click(
    function() {
        $("li").each(
            function() {
                testoNuovo = $(this).text().toUpperCase();
                $(this).text(testoNuovo);
            }
        )
    }
)