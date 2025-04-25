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
$("input[name=startEdit]").clockpicker({
    placement: "right",
    align: "left",
    autoclose: true,
    default: "now",
    donetext: "Select",
});
$("input[name=endEdit]").clockpicker({
    placement: "left",
    align: "left",
    autoclose: true,
    default: "now",
    donetext: "Select",
});
