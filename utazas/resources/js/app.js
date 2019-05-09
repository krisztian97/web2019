$('input[name="daterange"]').daterangepicker({
    opens: 'left'
}, function(start, end, label) {

    $("input#start").val(start)
    $("input#end").val(end)
});