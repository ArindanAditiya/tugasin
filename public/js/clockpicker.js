console.log("picker");

$("input[name=start]").clockpicker({
    placement: "top",
    align: "left",
    autoclose: true,
    default: "now",
    donetext: "Select",
});
$("input[name=end]").clockpicker({
    placement: "top",
    align: "left",
    autoclose: true,
    default: "now",
    donetext: "Select",
});
